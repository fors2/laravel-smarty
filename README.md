laravel-smarty
==============

テンプレートエンジンの組み込みは
SmartyView（https://github.com/lukeforeman/Laravel4-SmartyView）を利用します。

Controller側でAssing処理を意識することなく一括で行うためのスクリプトです。

Controller内で定義したクラス変数をAssignし、画面表示します。

使い方
------

クラス変数($this)はすべて自動的にAssignされます。<br/>
(php)$this->hoge = "hello world !";<br/>
↓<br/>
(tpl){$hoge} <!-- hello world -->  
<br/>
テンプレートは$this->layoutで指定します。<br/>
（拡張子不要）<br/>
<br/>
$this->layout = "index";<br/>
とするとindex.tplが画面に表示されます。<br/>
