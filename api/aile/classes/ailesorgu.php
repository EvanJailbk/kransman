<?php

use Restcektim\Database;

class AileSorgu extends Database{

    protected static $kisiTc;
    protected static $anneTc;
    protected static $babaTc;
    protected static $return_array = array();

    // Kişiyi getirir
    public static function kisiSorgu(){
        $tcno = $_GET['TcNo']; 
        self::$kisiTc = $tcno;
        $sorgu = self::table('101m') -> where('TC',$tcno) -> first();
        self::$return_array['Kendisi'] = $sorgu;
        self::$anneTc = $sorgu -> ANNETC;
        self::$babaTc = $sorgu -> BABATC;
        return new self;
    }

    // Baba getirme
    public static function getBaba(){
        $tc = self::$babaTc;
        $sorgu = self::table('101m') -> where('TC', $tc) -> first();
        if($sorgu){self::$return_array['Babası'] = $sorgu;}
        
        return new self;
    }
    // Anne Getirme
    public static function getAnne(){
        $tc = self::$anneTc;
        $sorgu = self::table('101m') -> where('TC', $tc) -> first();
        if($sorgu){self::$return_array['Annesi'] = $sorgu;}
        
        return new self;
    }
    // Kardeş Getir
    public static function getKardes(){
        $tc1 = self::$anneTc;
        $tc2 = self::$babaTc;
        $sorgu = self::table('101m') -> whereRaw('ANNETC = ? and BABATC = ?',[$tc1,$tc2]) -> get();
        if($sorgu){
            for($i = 0; $i < count($sorgu); $i++){
                if($sorgu[$i] -> TC == self::$kisiTc){
                    unset($sorgu[$i]);
                }
            }
            self::$return_array['Kardeşi'] = [$sorgu];
        }
        return new self;
    }
    // ÇOCUK GETİR
    public static function getCocuk(){
        $tc = self::$kisiTc;
        $sorgu = self::table('101m') -> whereRaw('ANNETC = ? or BABATC = ?',[$tc,$tc]) -> get();
        if($sorgu){
            self::$return_array['Çocuk'] = [$sorgu];
        }
        
        return new self;
    }


    // Apiyi Çağırma
    public static function getApi(){
        if(self::$kisiTc){
            self::$return_array['type'] = "success";
            self::$return_array['info'] = "Bu api jesu tarafından brez Ailesi için yazılmıştır <3";
        }else{
            self::$return_array['type'] = "false";
            self::$return_array['message'] = "Sorgu bulunamadı!";
            self::$return_array['info'] = "Bu api jesu tarafından brez Ailesi için yazılmıştır <3";
        }
        echo json_encode(self::$return_array);
        return new self;
    }
}


?>