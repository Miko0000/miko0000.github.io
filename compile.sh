#!/bin/sh
# create if not exists
mkdir result
# empty old result
rm -r result/*;
# run compile.php
php compile.php
# minify result
cd result;

minify --output=../result.minify --all --preserve=links -rs .;
