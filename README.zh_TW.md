# php-archive

## 緣起

之前在「[這篇討論](https://www.ubuntu-tw.org/modules/newbb/viewtopic.php?post_id=327124#forumpost327124)」，寫了一個簡單的「[範例](https://gist.github.com/samwhelp/2f6764561bc3b5f15125#file-phpunzip-php)」，

我在「Xubuntu 16.04 64位元」「PHP 7.0.8-0ubuntu0.16.04.2 (cli) ( NTS )」測試，解開的檔案還是會亂碼，

初步看起來，是因為解開來的檔名，已經先被編碼成「UTF-8」，

所以原來使用 「[mb_detect_encoding](http://php.net/manual/en/function.mb-detect-encoding.php)」的方式，就無法偵測出「Big5」編碼的檔名。

而該範例使用的是「PHP」的「[Extension](http://php.net/manual/en/book.zip.php)」，目前我找不到相關的參數可以設定，也不知道怎麼去修改。

所以在「[Packagist](https://packagist.org/)」找到了一個使用PHP來實做的專案，然後做了一點簡單的調整，就可以用來解開含有「Big5檔名」的「Zip file」。

也就是目前這個專案，使用方式請參考下面的「Demo」。

## Demo

* demo/[ex_001](https://github.com/samwhelp/php-archive/tree/master/demo/ex_001)
* demo/[ex_002](https://github.com/samwhelp/php-archive/tree/master/demo/ex_002)

## 相關連結

* https://gist.github.com/samwhelp/2f6764561bc3b5f15125
* https://www.ubuntu-tw.org/modules/newbb/viewtopic.php?post_id=326994#forumpost326994
* http://samwhelp.github.io/book-ubuntu-qna/read/case/file-compression/zip/unzip-big5.html
* http://php.net/manual/en/book.zip.php
* http://php.net/manual/en/function.mb-detect-order.php
* http://php.net/manual/en/function.iconv.php
