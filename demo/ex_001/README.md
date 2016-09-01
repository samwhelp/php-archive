# ex_001

## download test zip file

run

``` sh
$ ./download.sh
```

## test php-archive

### list zip file

run

``` sh
$ ./lszip.php
```

or

``` sh
$ php lszip.php
```

or

``` sh
$ ./szip.php | less
```

or

``` sh
$ php lszip.php | less
```

## extract zip file

run

``` sh
$ ./unzip.php
```

or

``` sh
$ php unzip.php
```

then

``` sh
$ tree tmp/Open_Data
```

## test unzip

### list zip file

run (not expect)

``` sh
$ unzip -l Open_Data.zip
```

run (expect)

``` sh
$ unzip -O big5 -l Open_Data.zip
```

### extract zip file

run (not expect)

``` sh
$ unzip Open_Data.zip
```

run (expect)

``` sh
$ unzip -O big5 Open_Data.zip
```
