#!/bin/sh

input=$1
output=$2

magick ${input} -type Palette PNG8:${output} -define png:color-type=3 \
colors 256
