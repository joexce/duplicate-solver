

## Cara Kerja
```PHP
$x=array(1,2,3,3); //data duplikat / data inputan
$find=array(1,3,2); //data asli yang sudah di tetapkan
```
```
-Data ini akan mengecek jika menemukan data yang sama
```
```PHP
if($find[$y]==$x[$n])
```
-Dan menambah variabel $found++ dan $count++
-Apabila jumlah count itu > 1 maka buat variabel penampung
$temp[$y]=0;
-Dan Apabila sebaliknya variabel penampung $temp[$y]=$count+1;
gunanya adalah menambahkan berapa duplikasi yang terbentuk tetapi tidak menghitung semua duplikasi hanya satu saja setiap duplikasi yang ketemu

## Output
kurang lebih outputnya seperti ini:

![alt text](https://github.com/joexce/duplicate-solver/blob/master/ssarray.png "Output")
