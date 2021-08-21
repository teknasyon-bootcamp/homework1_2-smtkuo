<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$guess = "1470"; // Tahmin edilen değer

function BMR_Karsilastirma($gender,$weight,$height,$age,$guess){
    // Cinsiyet belirleme ve hesaplanması.
    if($gender=="male"){
        $BMR_Value = 88.362+(13.397*$weight)+(4.799*$height)-(5.677*$age);  // ERKEK ICIN BMR DEGERI
    }elseif($gender=="female"){
        $BMR_Value = 447.593+(9.247*$weight)+(3.098*$height)-(4.330*$age);  // KADIN ICIN BMR DEGERI
    }
    // Hesaplanan BMR değerinin tahmini değer ile karşılaştırılması.
    if($BMR_Value>$guess){  
        // Gercek deger tahmini değerden büyük ise
        return '
        BMR: '.$BMR_Value.'
        Tahmin değerinden büyük
        ';
    }elseif($BMR_Value<$guess){
         // Gercek deger tahmini değerden küçük ise
        return '
        BMR: '.$BMR_Value.'
        Tahmin değerinden düşük
        ';
    }else{
        // Gercek deger tahmini değer ile eşit ise
        return '
        BMR: '.$BMR_Value.'
        Tahmin değerine eşit
        ';
    }
}
// BMR hesaplanması ve karşılaştırılması için gereken değerlerin fonksiyona iletilmesi.
$BMR_Sonucu = BMR_Karsilastirma($gender,$weight,$height,$age,$guess);

// Hesaplanan ve karşılaştırılan BMR değerinin ekrana yazdırılması
echo $BMR_Sonucu; 

/**
 * Bu ödevde bazal metabolizma hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük BMR ihtiyacını hesaplayıp
 * bunu ekrana yazan ve tahmin değeri ile karşılaştıran
 * PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 88.362 + (13.397 x kilo) + (4.799 x boy) – (5.677 x yaş)
 * Kadınlar için; 447.593 + (9.247 x kilo) + (3.098 x boy) – (4.330 x yaş)
 * 
 * Tahmin değeri ile karşılaştırmanızın sonucunda
 * "Tahmin değerinden düşük", "Tahmin değerinden büyük" veya
 * "Tahmin değerine eşit" şeklinde çıktı vermeniz gerekiyor.
 * 
 * Örneğin;
 * $gender = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana
 * 
 * BMR: 1399.173
 * Tahmin değerinden düşük
 * 
 * yazması gerekiyor.
 */
