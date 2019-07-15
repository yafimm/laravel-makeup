<?php
if(!function_exists('setIdTransaksi')) {
    function setIdTransaksi() {
        $id = 'TRS'.date('ymd');
        $lastId = DB::table('transaksi')->where('id','like', $id.'%')->orderBy('id', 'DESC')->first();
        if($lastId){
            $count = substr($lastId->id, 9);
            $count++;

            if(strlen($count) == 1){
                $count='00'.$count;
            }
            else if(strlen($count) == 2){
                $count='0'.$count;
            }
            else{
                $count = $count;
            }

            if($count)
                $id .= $count;
            }else{
                $id .= '001';
            }
        return $id;
    }
}

if(!function_exists('helper_money_format')) {
    function helper_money_format($data) {
        return number_format($data, 2, ',', '.');
    }
}
