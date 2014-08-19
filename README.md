laravel-smarty
==============

テンプレートエンジンの組み込みは
SmartyView（https://github.com/lukeforeman/Laravel4-SmartyView）を利用します。

Controller側でAssing処理を意識することなく一括で行うためのスクリプトです。

Controller内で定義したクラス変数をAssignし、画面表示します。

使い方
------

クラス変数($this)はすべて自動的にAssignされます。
(php)$this->hoge = "hello world !";
↓
(tpl){$hoge} <!-- hello world -->

テンプレートは$this->layoutで指定します。
（拡張子不要）

$this->layout = "index";
とするとindex.tplが画面に表示されます。
