#!/bin/sh
echo "Content-type: text/html"
echo ""
echo "<pre>"
whoami
cd /apps/janaq/janaq.com
/usr/bin/git --git-dir=/apps/janaq/janaq.com/.git fetch
/usr/bin/git --git-dir=/apps/janaq/janaq.com/.git --work-tree=/apps/janaq/janaq.com merge origin/master
