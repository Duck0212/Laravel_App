from pathlib import Path
import re

root = Path('resources/views')
pattern = re.compile(r'(<button\b[^>]*\bclass=")([^"]*)(")', re.MULTILINE)
updated = []

for file in root.glob('*.blade.php'):
    text = file.read_text(encoding='utf-8')

    def repl(m):
        classes = m.group(2)
        if 'cursor-pointer' in classes:
            return m.group(0)
        return f'{m.group(1)}{classes} cursor-pointer hover:cursor-pointer{m.group(3)}'

    new = pattern.sub(repl, text)
    if new != text:
        file.write_text(new, encoding='utf-8')
        updated.append(str(file))

print('updated', len(updated), 'files')
for f in updated:
    print(f)
