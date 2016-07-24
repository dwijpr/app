<?php

use Illuminate\Database\Seeder;

class DartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('darts')->delete();
        
        \DB::table('darts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'title' => 'Mulai Menulis',
                'body' => 'Hai, perkenalkan, nama saya Dwi, nama lengkap Dwi Juli Prabowo, saya rasa
cukup mudah untuk menginterpretasikan maksud dari nama tersebut ...

> Apalah arti sebuah nama
<footer>William Shakespeare</footer>

Berasal dari sebuah kota di pulau Jawa bagian tengah yang terkenal dengan
candi Borobudur-nya. Seorang lelaki <sup>1</sup>/<sub>4</sub>
abad yang sedang mencoba _secara paksa_ hobi baru.

Beberapa tahun ini saya sudah memiliki keinginan untuk membuat sebuah karya
dengan cara menulis seperti membuat artikel untuk _blog_ atau membuat buku
dengan tujuan tidak lain adalah mendapat penghasilan dari karya tersebut. Namun
keinginan tinggal keinginan, membuat artikel, buku atau karya tulisan apapun,
hingga kini masih menjadi sebuah angan-angan.

Menulis, sebuah _skill_ yang terdengar _simple_, namun nyatanya membuat sebuah
karya dari keahlian tersebut sangatlah sulit, khususnya untuk saya. Membuat
beberapa artikel untuk blog, dan kemudian menghapusnya kembali karena tidak
yakin apakah tulisan tersebut layak baca. Tidak ada jejak dari tulisan-tulisan
sebelumnya, hingga akhirnya memutuskan untuk menyusun tulisan dengan judul
[Mulai Menulis](./mulai-menulis) ini.

Membuat _blog_ seperti menjadi sebuah hobi, mendesain tampilan, mengatur konten
yang ada seperti _layout_, judul, kategori. Mencoba berbagai _platform_ mulai
dari *blogspot*, *wordpress*, *jekyll*, hingga membuat program untuk membuat
_blog_ sendiri masih tidak bisa membantu menciptakan karya yang bagus. Karena
inti dari sebuah _blog_ adalah isinya itu sendiri yang berupa tulisan. Beberapa
blog dihapus yang lainnya terbengkalai tanpa lanjutan.

Dari sini saya berharap rangkaian tulisan ini dapat terus berlanjut. Mungkin
saya akan membuat tulisan yang tidak bertema atau hanya tulisan tentang
kegiatan sehari-hari. Semoga tulisan saya dapat bermanfaat bagi
pembaca, khususnya untuk saya sendiri, dan mampu menghasilkan karya yang lebih 
baik lagi.',
                'created_at' => '2016-07-23 18:44:58',
                'updated_at' => '2016-07-23 18:55:39',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'title' => 'Menggunakan Penyunting Teks VIM',
                'body' => 'Vim adalah salah satu perangkat lunak komputer yang termasuk ke dalam golongan
_text editor_ bersama dengan gedit dan notepad. Teks disini bersifat biasa atau
dikenal dengan istilah _plain text_. Jadi konten teks yang kita lihat sesuai
dengan isi sebenarnya yang ada pada berkas, hal ini berbeda dengan berkas teks
yang terformat seperti yang biasa disunting menggunakan _word processor_ atau 
program yang biasa kita gunakan seperti **Microsoft Word** atau 
**LibreOffice Writer**.

_Software_ ini merupakan salah satu penyunting teks favorit saya selain 
**Sublime Text**. Sayangnya program ini terlalu kompleks untuk saya gunakan
sehari-hari. Namun selain mengedit kode program yang saya biasa lakukan sehari
-hari keperluan mengedit teks saya sering menggunakan program ini.

Kompleks yang saya maksud disini adalah fitur yang dibutuhkan setiap program
penyunting teks pasti bisa ditemui pada _software_ ini. Namun yang saya rasakan
adalah, beberapa perintah terlalu sulit dilakukan untuk melakukan hal sederhana.
Saat ini yang saya lakukan adalah memperbanyak pengetahuan tentang program ini
sehingga nantinya saya tidak memerlukan program penyunting teks lain. Untuk saat
ini **Sublime Text** masih menjadi pilihan utama untuk mengedit kode program.

Meng-_install_ sistem operasi cukup sering saya lakukan, entah dikarenakan
terjadi _error_ pada sistem operasi karena salah dalam setting konfigurasi yang
dilakukan oleh saya sendiri, atau distro baru yang ingin dicoba, dan berbagai
macam alasan yang terpaksa harus melakukan install dari awal. Perlunya mengedit
file-file konfigurasi maka penyunting teks **VIM** inilah yang saya install
pertama kali. Pada sistem operasi yang biasa saya gunakan, menginstall vim dapat
dilakukan dengan cukup mudah yaitu dengan cara

```bash
$ sudo apt-get install vim-gnome
```

tidak seperti program penyunting teks biasa, **VIM** memerlukan konfigurasi awal.
Salah satunya adalah dengan membuat file **.vimrc** yang biasa terletak pada _home_
direktori. File ini akan dieksekusi pada saat awal penggunaan **VIM** sebelum program
mulai digunakan. **VIM** akan terkonfigurasi sesuai dengan script yang ada pada file
tersebut. Berikut adalah script **.vimrc** yang saya gunakan

<div class="highlight-wrapper">
<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span style="color: #A90D91">set</span> <span style="color: #A90D91">tabstop</span>=<span style="color: #1C01CE">4</span>
<span style="color: #A90D91">set</span> <span style="color: #A90D91">shiftwidth</span>=<span style="color: #1C01CE">4</span>
<span style="color: #A90D91">set</span> <span style="color: #A90D91">expandtab</span>
<span style="color: #A90D91">set</span> <span style="color: #A90D91">number</span>
<span style="color: #A90D91">set</span> <span style="color: #A90D91">relativenumber</span>
<span style="color: #A90D91">set</span> <span style="color: #A90D91">autoindent</span>
<span style="color: #A90D91">colorscheme</span> elflord
</pre></div>
</div>
',
                'created_at' => '2016-07-23 19:12:43',
                'updated_at' => '2016-07-23 19:12:43',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'title' => 'Mencoba _Bit Field_',
                'body' => 'Beberapa waktu lalu saya mencari dan mencoba memahami tentang salah satu konsep
pemrograman yang sebenarnya sudah saya ketahui beberapa waktu lalu namun belum
sepenuhnya paham dan belum sempat untuk mengimplementasikannya pada sebuah
kasus. Setelah beberapa kali membaca dari sumber-sumber yang saya dapat, artikel
ini akan membahas tentang _bit field_ menurut se-_penangkap_-an saya ...

**Bit Field** adalah istilah yang digunakan pada pemrograman komputer untuk pemetaan bidang pada sebuah data yang direpresentasikan dengan sebuah angka (_integral_) dimana nantinya akan ditranslasi menjadi bilangan biner sehingga akan tampak _fields_ yang dimaksud, setiap _bit_ yang dialamatkan memiliki artian khusus menurut dengan rancangan logika pembuat kode.

Untuk lebih jelasnya bisa diambil contoh untuk implementasi _bit field_ ini. Contoh yang akan saya gunakan adalah tentang sistem ijin sistem operasi berbasis linux. Bisa dilihat melalui perintah

```
$ chmod 777 file.txt
```

dari _man page_ **chmod** program tersebut berfungsi untuk mengganti _file mode
bits_. Dari angka 777 tersebut bisa diambil salah satunya saja yaitu angka 7,
angka 7 disini memiliki arti nilai dari user memiliki akses untuk _read_, _write_,
_execute_ (**rwx**). Bagaimana mungkin yang tadinya hanya sebuah angka 7, dapat
diartikan menjadi _user_ diberikan ijin untuk dapat membaca, memperbaharui, dan mengeksekusi file tersebut? Angka 7 tersebut merupakan kombinasi dari angka lainnya yaitu 4, 2, dan 1. Saat dilihat dari angka 4, 2, 1 tersebut mungkin belum nampak bagaimana cara **_bit field_**  ini bekerja, namun ketika mengubahnya menjadi bilangan biner maka akan terlihat sesuatu seperti ini.

<div class="row">
<div class="col-sm-6">
<table class="table table-bordered table-not-full">
<tr>
<th>angka</th>
<th>arti</th>
<th>biner</th>
</tr>
<tr>
<td class="text-right">4</td>
<td>read</td>
<td>
<table class="table table-bordered" style="margin: 0;padding: 0;">
<tr>
<td>1</td>
<td>0</td>
<td>0</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="text-right">2</td>
<td>write</td>
<td>
<table class="table table-bordered" style="margin: 0;padding: 0;">
<tr>
<td>0</td>
<td>1</td>
<td>0</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="text-right">1</td>
<td>execute</td>
<td>
<table class="table table-bordered" style="margin: 0;padding: 0;">
<tr>
<td>0</td>
<td>0</td>
<td>1</td>
</tr>
</table>
</td>
</tr>
</table>
</div>

<div class="col-sm-6 text-center">
<table class="table table-bordered table-not-full">
<tr>
<td>read</td>
<td>write</td>
<td>execute</td>
<th>field</th>
</tr>
<tr>
<td colspan="3" class="text-center">7</td>
<th>nilai</th>
</tr>
<tr>
<td class="text-center">1</td>
<td class="text-center">1</td>
<td class="text-center">1</td>
<th>nilai biner</th>
</tr>
</table>
</div>
</div>

Dari table tersebut dapat terlihat dengan lebih jelas maksud dibalik angka 7
itu. Pada saat dikonversi menjadi bilangan biner angka tersebut akan menjadi
tampak seperti bilangan biner 3 digit -&gt;

<style>
.biner-wrapper td, .biner-wrapper th{
padding: 2px 8px;
}
.biner-wrapper .separator-or{
border-top: 1px solid black;
}
.biner-wrapper th.biner-represent{
border-left: 1px solid black;
}
</style>

<div>
<table class="biner-wrapper">
<tr>
<td>1</td>
<td>0</td>
<td>0</td>
<th class="biner-represent">4</th>
</tr>
<tr>
<td>0</td>
<td>1</td>
<td>0</td>
<th class="biner-represent">2</th>
</tr>
<tr>
<td>0</td>
<td>0</td>
<td>1</td>
<th class="biner-represent">1</th>
<th rowspan="2">| (or)</th>
</tr>
<tr class="separator-or">
<td>1</td>
<td>1</td>
<td>1</td>
<th class="biner-represent">7</th>
</tr>
</table>
</div>

Angka 7 tersebut merupakan hasil dari operasi _bitwise_ seperti kode berikut

```
value = 4|2|1
```

Dengan begitu, hanya sebuah bilangan decimal dapat merepresentasi berbagai macam
arti seperti contoh tersebut. Lalu bagaimana cara mengetahui bahwa nilai angka
tersebut memiliki arti yang seharusnya? Contoh listing kode **PHP** berikut mungkin
akan memberikan gambaran bagaimana cara mem-_parsing_ arti dari sebuah angka
tersebut.

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span style="color: #633820">&lt;?php</span>
<span style="color: #A90D91">define</span>(<span style="color: #C41A16">&#39;PERMISSION_READ&#39;</span>, <span style="color: #1C01CE">4</span>);
<span style="color: #A90D91">define</span>(<span style="color: #C41A16">&#39;PERMISSION_WRITE&#39;</span>, <span style="color: #1C01CE">2</span>);
<span style="color: #A90D91">define</span>(<span style="color: #C41A16">&#39;PERMISSION_EXECUTE&#39;</span>, <span style="color: #1C01CE">1</span>);

<span style="color: #000000">$value</span> <span style="color: #000000">=</span> <span style="color: #000000">PERMISSION_READ</span> <span style="color: #000000">|</span> <span style="color: #000000">PERMISSION_WRITE</span> <span style="color: #000000">|</span> <span style="color: #000000">PERMISSION_EXECUTE</span>;
<span style="color: #000000">check_permission</span>(<span style="color: #000000">$value</span>);

<span style="color: #000000">$value</span> <span style="color: #000000">=</span> <span style="color: #000000">PERMISSION_READ</span>;
<span style="color: #000000">check_permission</span>(<span style="color: #000000">$value</span>);

<span style="color: #000000">$value</span> <span style="color: #000000">=</span> <span style="color: #000000">PERMISSION_EXECUTE</span>;
<span style="color: #000000">check_permission</span>(<span style="color: #000000">$value</span>);

<span style="color: #000000">$value</span> <span style="color: #000000">=</span> <span style="color: #000000">PERMISSION_READ</span> <span style="color: #000000">|</span> <span style="color: #000000">PERMISSION_READ</span> <span style="color: #000000">|</span> <span style="color: #000000">PERMISSION_EXECUTE</span>;
<span style="color: #000000">check_permission</span>(<span style="color: #000000">$value</span>);

<span style="color: #000000">$value</span> <span style="color: #000000">=</span> <span style="color: #000000">PERMISSION_READ</span> <span style="color: #000000">|</span> <span style="color: #000000">PERMISSION_WRITE</span> <span style="color: #000000">|</span> <span style="color: #000000">PERMISSION_EXECUTE</span>;
<span style="color: #000000">check_permission</span>(<span style="color: #000000">$value</span>);

<span style="color: #A90D91">function</span> <span style="color: #000000">check_permission</span>(<span style="color: #000000">$value</span>){
<span style="color: #A90D91">echo</span> <span style="color: #C41A16">&quot;representation $value means &quot;</span>;
<span style="color: #A90D91">echo</span> <span style="color: #000000">$value</span> <span style="color: #000000">&amp;</span> <span style="color: #000000">PERMISSION_READ</span>       <span style="color: #000000">?</span> <span style="color: #C41A16">&quot;r&quot;</span> <span style="color: #000000">:</span> <span style="color: #C41A16">&quot;-&quot;</span>;
<span style="color: #A90D91">echo</span> <span style="color: #000000">$value</span> <span style="color: #000000">&amp;</span> <span style="color: #000000">PERMISSION_WRITE</span>      <span style="color: #000000">?</span> <span style="color: #C41A16">&quot;w&quot;</span> <span style="color: #000000">:</span> <span style="color: #C41A16">&quot;-&quot;</span>;
<span style="color: #A90D91">echo</span> <span style="color: #000000">$value</span> <span style="color: #000000">&amp;</span> <span style="color: #000000">PERMISSION_EXECUTE</span>    <span style="color: #000000">?</span> <span style="color: #C41A16">&quot;x&quot;</span> <span style="color: #000000">:</span> <span style="color: #C41A16">&quot;-&quot;</span>;
<span style="color: #A90D91">echo</span> <span style="color: #C41A16">&quot;\\n&quot;</span>;
}
</pre></div>


Yang perlu diketahui adalah saya sebenarnya tidak terlalu meng-_oprek_ kedalam
kode tentang sistem ijin ini. Kemungkinan logika yang dipakai berbeda dengan
pemahaman saya, namun yang saya lihat adalah betapa jelasnya contoh sistem ini
jika bekerja menggunakan konsep _bit field_, jadi saya menggunakan contoh
angka dari salah perintah sistem operasi berbasis linux tersebut.
',
                'created_at' => '2016-07-23 19:14:12',
                'updated_at' => '2016-07-23 19:14:12',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'title' => 'Script Bash Integrasi dengan Git',
                'body' => 'Sehari-hari saya menggunakan **gnome-terminal** untuk melakukan pekerjaan
saya. Selain itu saya juga hampir selalu menggunakan program untuk
mengontrol versi kode yang dikenal dengan **Git**. Lalu, 
muncul keinginan untuk mengintegrasikan keduanya, 
bagaimana agar kedua
program ini bisa terintegrasi sehingga dapat mempermudah pekerjaan saya?

##### _Begin with the End_

Nantinya **gnome-terminal** akan mampu mendeteksi apakah dia berada pada sebuah 
direktori yang terhubung dengan **Git** atau tidak, mampu mendeteksi nama _branch_
yang sedang digunakan, dan juga mampu medeteksi _state_ dari _branch_
tersebut.

<div id="bash-git-video-wrapper">
<style>
#bash-git-video-wrapper{
max-width: 100%;
overflow-x: auto;
text-align: center;
}
#bash-git-video-wrapper video{
display: inline-block;
}
</style>

<video width="550" height="300" controls>
<source src="{{ asset(\'videos/bash-git.mp4\') }}" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>

Pertama-tama _script_ dimulai dengan memodifikasi tampilan **bash prompt**, yang biasa nya terlihat seperti

```
user@comp:~$ █
```

menjadi seperti

```
( ~ ) > █
```

Membuat _function_ menggunakan **bash script** dapat dilakukan dengan cara seperti
biasa menulis program menggunakan bahasa pemrograman lainnya.

```
function _prompt_command(){
}
```

Untuk mengubah tampilan _prompt_ diperlukan variabel **bash** yang dikenal dengan
_identifier_ ```PS1```. Cara _assign_ nilai pada variabel **bash** memerlukan
kata kunci ```export```. Membuat tampilan ```( ~ )``` faktanya memerlukan kode
yang cukup panjang sehingga saya memisah _assign_ nilai variabel ```PS1```
ini dengan cara _append_ nilai ke variabel. Fungsi lengkap nya akan tampak seperti ini

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%">
<span style="color: #A90D91">function</span> _prompt_command<span style="color: #000000">()</span> <span style="color: #000000">{</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=</span><span style="color: #C41A16">&#39;\\n\\[\\e[1;31m\\]( &#39;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&#39;\\[\\e[1;33m\\]\\W \\[\\e[1;31m\\]) &#39;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&#39;\\[\\e[1;32m\\]&gt; &#39;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&#39;\\[\\e[0m\\] &#39;</span>
<span style="color: #000000">}</span>
<span style="color: #000000">PROMPT_COMMAND=</span>_prompt_command
</pre></div>


Langkah selanjutnya adalah menambahkan integrasi ke **Git**. Supaya lebih rapi
saya membuat sebuah fungsi lagi khusus untuk fungsionalitas deteksi **Git** ini.
Dan nantinya fungsi tersebut dapat dengah mudah dimasukan kedalam fungsi 
<em>_promp_command</em>.


<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%">
<span style="color: #A90D91">function</span> _prompt_command<span style="color: #000000">()</span> <span style="color: #000000">{</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=</span><span style="color: #C41A16">&#39;\\n\\[\\e[1;31m\\]( &#39;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&#39;\\[\\e[1;33m\\]\\W \\[\\e[1;31m\\]) &#39;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16;font-size: 18px !important;">&quot;`_git_prompt`&quot;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&#39;\\[\\e[1;32m\\]&gt; &#39;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&#39;\\[\\e[0m\\] &#39;</span>
<span style="color: #000000">}</span>
<span style="color: #000000">PROMPT_COMMAND=</span>_prompt_command
</pre></div>

Keseluruhan kode yang dapat digunakan, dan tinggal ditambahkan ke akhir berkas _.bashrc_
akan tampak seperti berikut

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span style="color: #177500"># ====================================================================</span>

<span style="color: #A90D91">function</span> _git_prompt<span style="color: #000000">()</span> <span style="color: #000000">{</span>
<span style="color: #A90D91">local </span><span style="color: #000000">git_status=</span><span style="color: #C41A16">&quot;`git status -unormal 2&gt;&amp;1`&quot;</span>
<span style="color: #A90D91">if</span> ! <span style="color: #000000">[[</span> <span style="color: #C41A16">&quot;</span><span style="color: #000000">$git_status</span><span style="color: #C41A16">&quot;</span> <span style="color: #000000">=</span>~ Not<span style="color: #C41A16">\\ </span>a<span style="color: #C41A16">\\ </span>git<span style="color: #C41A16">\\ </span>repo <span style="color: #000000">]]</span>; <span style="color: #A90D91">then</span>
<span style="color: #A90D91">if</span> <span style="color: #000000">[[</span> <span style="color: #C41A16">&quot;</span><span style="color: #000000">$git_status</span><span style="color: #C41A16">&quot;</span> <span style="color: #000000">=</span>~ nothing<span style="color: #C41A16">\\ </span>to<span style="color: #C41A16">\\ </span>commit <span style="color: #000000">]]</span>; <span style="color: #A90D91">then</span>
<span style="color: #A90D91">local </span><span style="color: #000000">ansi=</span>42
<span style="color: #A90D91">elif</span> <span style="color: #000000">[[</span> <span style="color: #C41A16">&quot;</span><span style="color: #000000">$git_status</span><span style="color: #C41A16">&quot;</span> <span style="color: #000000">=</span>~ nothing<span style="color: #C41A16">\\ </span>added<span style="color: #C41A16">\\ </span>to<span style="color: #C41A16">\\ </span>commit<span style="color: #C41A16">\\ </span>but<span style="color: #C41A16">\\ </span>untracked<span style="color: #C41A16">\\ </span>files<span style="color: #C41A16">\\ </span>present <span style="color: #000000">]]</span>; <span style="color: #A90D91">then</span>
<span style="color: #A90D91">local </span><span style="color: #000000">ansi=</span>43
<span style="color: #A90D91">else</span>
<span style="color: #A90D91">local </span><span style="color: #000000">ansi=</span>41
<span style="color: #A90D91">fi</span>
<span style="color: #A90D91">if</span> <span style="color: #000000">[[</span> <span style="color: #C41A16">&quot;</span><span style="color: #000000">$git_status</span><span style="color: #C41A16">&quot;</span> <span style="color: #000000">=</span>~ On<span style="color: #C41A16">\\ </span>branch<span style="color: #C41A16">\\ </span><span style="color: #000000">([</span>^<span style="color: #000000">[</span>:space:<span style="color: #000000">]]</span>+<span style="color: #000000">)</span> <span style="color: #000000">]]</span>; <span style="color: #A90D91">then</span>
<span style="color: #000000">branch=</span><span style="color: #C41A16">${</span><span style="color: #000000">BASH_REMATCH</span>[1]<span style="color: #C41A16">}</span>
<span style="color: #A90D91">else</span>
<span style="color: #000000">branch=</span><span style="color: #C41A16">&quot;(`git describe --all --contains --abbrev=4 HEAD 2&gt; /dev/null ||</span>
<span style="color: #C41A16">                echo HEAD`)&quot;</span>
<span style="color: #A90D91">fi</span>
<span style="color: #A90D91">echo</span> -n <span style="color: #C41A16">&#39;\\[\\e[0;37;&#39;&quot;</span><span style="color: #000000">$ansi</span><span style="color: #C41A16">&quot;&#39;;1m\\]&#39;&quot; </span><span style="color: #000000">$branch</span><span style="color: #C41A16"> &quot;&#39;\\[\\e[0m\\] &#39;</span>
<span style="color: #A90D91">fi</span>
<span style="color: #000000">}</span>

<span style="color: #A90D91">function</span> _prompt_command<span style="color: #000000">()</span> <span style="color: #000000">{</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=</span><span style="color: #C41A16">&#39;\\n\\[\\e[1;31m\\]( &#39;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&#39;\\[\\e[1;33m\\]\\W \\[\\e[1;31m\\]) &#39;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&quot;`_git_prompt`&quot;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&#39;\\[\\e[1;32m\\]&gt; &#39;</span>
<span style="color: #A90D91">export </span><span style="color: #000000">PS1=$PS1</span><span style="color: #C41A16">&#39;\\[\\e[0m\\] &#39;</span>
<span style="color: #000000">}</span>
<span style="color: #000000">PROMPT_COMMAND=</span>_prompt_command

<span style="color: #177500"># ====================================================================</span>
<span style="color: #177500"># Git Integration</span>
<span style="color: #177500"># ====================================================================</span>
</pre></div>

Saya sebenarnya belum terlalu men-_debug_ fungsi <em>&#95;git_prompt</em>, kode
tersebut merupakan hasil _pengembaraan_ saya di **Google**, sudah cukup lama
sehingga saya lupa sumber aslinya. Seluruh tampilan karakter dalam variabel
```PS1``` juga bisa diubah, dan disesuaikan dengan keinginan.',
                'created_at' => '2016-07-23 19:15:22',
                'updated_at' => '2016-07-23 19:15:22',
            ),
        ));
        
        
    }
}
