#!/bin/sh

quality=50
if test -n "$3"; then
	quality=$3
fi

magick $1 -quality $quality -define webp:lossless=true $2
