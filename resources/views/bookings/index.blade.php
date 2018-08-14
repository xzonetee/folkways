@extends('layouts.app')

@section('content')
<div class="container">
<h1>Payment</h1>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <table>
    <tr><td><input type="hidden" name="on0" value="ราคา">ราคา</td></tr><tr><td><select name="os0">
        <option value="500 Bath">500 Bath ฿500.00 THB</option>
        <option value="1000 Bath">1000 Bath ฿1,000.00 THB</option>
        <option value="1500 Bath">1500 Bath ฿1,500.00 THB</option>
        <option value="2000 Bath">2000 Bath ฿2,000.00 THB</option>
        <option value="2500 Bath">2500 Bath ฿2,500.00 THB</option>
    </select> </td></tr>
    </table>
    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
    ">
    <input type="image" src="https://www.paypalobjects.com/th_TH/TH/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - วิธีชำระเงินแบบออนไลน์ที่ปลอดภัยกว่าและง่ายกว่า!">
    <img alt="" border="0" src="https://www.paypalobjects.com/th_TH/i/scr/pixel.gif" width="1" height="1">
    </form>
    

    <a href="{{ url('/') }}" class="btn btn-warning">Back</a>
</div>
@endsection