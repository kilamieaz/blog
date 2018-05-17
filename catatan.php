-npm init
-npm install bootstrap font-awesome jquery popper.js --save
-npm install gulp gulp-sass browser-sync --save-dev    (-dev: hanya di install saat development)
-sudo npm install -g gulp-cli
-buat file src/scss/style.scss

-buat file gulpfile.js
#lihat file gulpfile.js

-jalankan "gulp" di command

#tambahkan git ignore
touch .gitignore && echo "node_modules/" >> .gitignore

#liat package.json
di dalam package json rubah start nya menjadi gulp
#buat index.html