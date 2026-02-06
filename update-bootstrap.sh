#!/bin/bash

# Script to update all HTML and PHP files to use new Bootstrap replacement

echo "Updating all files to use Bootstrap replacement and jQuery 3.7.1..."

# Files to update
FILES=(
    "index.php"
    "index.html"
    "Videos/ifelse.html"
    "About/aboutAlpha.html"
    "About/about.html"
    "Lessons/for.html"
    "Lessons/ifelse2.html"
    "Lessons/ifelse3.html"
    "Lessons/ifelse.html"
    "Lessons/switch.html"
    "Lessons/dowhile.html"
    "Lessons/while.html"
)

for file in "${FILES[@]}"; do
    if [ -f "$file" ]; then
        echo "Processing $file..."

        # Replace jQuery 1.12.0 with 3.7.1
        sed -i.bak 's|jquery-1\.12\.0\.min\.js|jquery-3.7.1.min.js|g' "$file"
        sed -i.bak 's|../jquery-1\.12\.0\.min\.js|../jquery-3.7.1.min.js|g' "$file"

        # Replace Bootstrap CSS with replacement (local path)
        sed -i.bak 's|<link rel="stylesheet" href="bootstrap-3\.3\.7/css/bootstrap\.min\.css"[^>]*>||g' "$file"
        sed -i.bak 's|<link rel="stylesheet" href="../bootstrap-3\.3\.7/css/bootstrap\.min\.css"[^>]*>||g' "$file"
        sed -i.bak 's|<link rel="stylesheet" href="bootstrap-3\.3\.7/css/bootstrap-theme\.min\.css"[^>]*>||g' "$file"
        sed -i.bak 's|<link rel="stylesheet" href="../bootstrap-3\.3\.7/css/bootstrap-theme\.min\.css"[^>]*>||g' "$file"

        # Replace Bootstrap CSS from CDN
        sed -i.bak 's|<link rel="stylesheet" href="https://maxcdn\.bootstrapcdn\.com/bootstrap/3\.3\.6/css/bootstrap\.min\.css"[^>]*>||g' "$file"

        # Replace Bootstrap JS with replacements (local path)
        sed -i.bak 's|<script src="bootstrap-3\.3\.7/js/bootstrap\.min\.js"[^>]*></script>|<script src="bootstrap-replacement.js"></script>\n<script src="tabs-replacement.js"></script>|g' "$file"
        sed -i.bak 's|<script src="../bootstrap-3\.3\.7/js/bootstrap\.min\.js"[^>]*></script>|<script src="../bootstrap-replacement.js"></script>\n<script src="../tabs-replacement.js"></script>|g' "$file"

        # Replace Bootstrap JS from CDN
        sed -i.bak 's|<script src="https://maxcdn\.bootstrapcdn\.com/bootstrap/3\.3\.6/js/bootstrap\.min\.js"[^>]*></script>|<script src="../bootstrap-replacement.js"></script>\n<script src="../tabs-replacement.js"></script>|g' "$file"

        # Add bootstrap-replacement.css after jquery-ui.min.css
        sed -i.bak 's|<link rel="stylesheet" href="jquery-ui-1\.12\.0/jquery-ui\.min\.css">|<link rel="stylesheet" href="jquery-ui-1.12.0/jquery-ui.min.css">\n  <link rel="stylesheet" href="bootstrap-replacement.css">|g' "$file"
        sed -i.bak 's|<link rel="stylesheet" href="../jquery-ui-1\.12\.0/jquery-ui\.min\.css">|<link rel="stylesheet" href="../jquery-ui-1.12.0/jquery-ui.min.css">\n  <link rel="stylesheet" href="../bootstrap-replacement.css">|g' "$file"

        echo "  ✓ Updated $file"
    else
        echo "  ✗ File not found: $file"
    fi
done

echo ""
echo "Done! Backup files created with .bak extension"
echo "Please test your site and if everything works, you can remove the backup files with:"
echo "  find . -name '*.bak' -delete"
