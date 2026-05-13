$root = "resources/views"
$pattern = [regex] '(<button\b[^>]*\bclass=")([^"]*)(")'
$updated = @()
Get-ChildItem -Path $root -Filter '*.blade.php' | ForEach-Object {
    $text = Get-Content -Path $_.FullName -Raw
    $new = $pattern.Replace($text, {
        param($m)
        $classes = $m.Groups[2].Value
        if ($classes -match '\bcursor-pointer\b') { return $m.Value }
        return "$($m.Groups[1].Value)$classes cursor-pointer hover:cursor-pointer$($m.Groups[3].Value)"
    })
    if ($new -ne $text) {
        Set-Content -Path $_.FullName -Value $new
        $updated += $_.FullName
    }
}
Write-Output "updated $($updated.Count) files"
$updated | ForEach-Object { Write-Output $_ }