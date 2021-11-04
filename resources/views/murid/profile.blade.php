@extends('murid/basee')
@section('content')
@if(session('success'))
<div class="alert alert-info" role="alert">
  {{ session('success') }}
</div>
@endif

@if(session('warning'))
<div class="alert alert-warning" role="alert">
  {{ session('warning') }}
</div>
@endif
<style type="text/css">
    .rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:180px;
        height:170px ;
    }
    hr.photo2 {
        width: 230px;

    }
    a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 16px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:32em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 16px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 190px;
    margin-left:3em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}


@media screen and (width: 1024px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 120px;
    margin-left:21em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:1em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 768px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:7em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:0.5em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 375px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:3.7em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:1.2em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 414px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:3.7em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:2.3em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 812px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:7em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:-0.3em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 736px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:20em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:0.5em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 667px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:17em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:-0.4em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 320px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:2.3em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:1.2em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 568px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:8em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:0.7em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 411px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:3.7em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:2.3em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 823px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:7em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:-0.3em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 731px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:20em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:0.5em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 360px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:3.7em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:1.5em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
@media screen and (width: 640px) {
a.btn-edit4 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 130px;
    margin-left:15em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
a.btn-edit3 {
    display: block;
    padding: 5px 23px;
    font-size: 14px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 160px;
    margin-left:-0.8em;
    text-decoration:none; 
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
        [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 15px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}

@media screen and (width: 1024px) {
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:100px;
        height:100px ;
    }

  }
@media screen and (width: 731px) {
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:110px;
        height:100px ;
    }

  }
@media screen and (width: 768px) {
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 13em;
}
.card{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left: 3em;
}
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
     [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
  }

@media screen and (width: 736px) {
    .rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
}
@media screen and (width: 667px) {
    .rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
    [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
}
@media screen and (width: 640px) {
    .rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
    [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
}
@media screen and (width: 812px) {
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 12em;
}
.card{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left: 2em;
}
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
     [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
  }
@media screen and (width: 823px) {
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 13em;
}
.card{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left: 3em;
}
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
     [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
  }
@media screen and (width: 375px) {
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 15em;
    margin-left: 2.5em;
}
.card{
    margin-top: 25em;
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left: -6em;
}
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
     [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
  }
@media screen and (width: 360px) {
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 16em;
    margin-left: 2em;
}
.card{
    margin-top: 25em;
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left: -5.8em;
}
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
     [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
  }
@media screen and (width: 414px) {
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left: 2.7em;
}
.card{
    margin-top: 25em;
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left: -5.4em;
}
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
     [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
  }
@media screen and (width: 320px) {
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 15em;
    margin-left: 1em;
}
.card{
    margin-top: 25em;
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 15em;
    margin-left: -5.4em;
}
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
     [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
  }
@media screen and (width: 568px) {
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 14em;
    margin-left: 0.5em;
}
.card{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left:4em;
}
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
     [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
  }
@media screen and (width: 411px) {
.card1{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left: 2.7em;
}
.card{
    margin-top: 25em;
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    width: 17em;
    margin-left: -5.4em;
}
.rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
        width:120px;
        height:110px ;
    }
     [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 10px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}
  }
@media screen and (width: 375px) {
.modall-title {
    margin-left: 5em;
}
  }
  @media screen and (width: 360px) {
.modall-title {
    margin-left: 4em;
}
  }
    @media screen and (width: 320px) {
.modall-title {
    margin-left: 3em;
}
  }
    @media screen and (width: 414px) {
.modall-title {
    margin-left: 6em;
}
  }

    @media screen and (width: 411px) {
.modall-title {
    margin-left: 6em;
}
  }
    @media screen and (width: 568px) {
.modall-title {
    margin-left: 9em;
}

.btn-edit{
    display: block;
    padding: 5px 28px;
    font-size: 16px;
    border: 1px solid #158ADF;
    color: #158ADF;
    background-color: #ffffff;
    line-height: 25px;
    font-weight: 500;
    border-radius: 75px;
    width: 188px;
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
  }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 col-md-offset-6">
                <div class="box box-primary">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Profil Siswa</h1>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
</div>
<!-- /.content-header -->
<!-- Main content -->
@php $no = 1; @endphp
@foreach($data as $d)
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card1">
                    <div class="card-body">
                        <i class="fas fa-user mr-2"></i>Foto Profil

                        <hr class="photo">
                         <div class="rounded" >
                       
                            @if($d->file==null)
                            <img class="navbar-brand-full" src="{{('/tema/images/user.png')}}"
                                alt="upload foto" width="180px" height="170px"
                                style="display:block; margin-left:auto; margin-right:auto;">
                            @else
                            <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                <img width="180px" height="170px" src="{{ url('/data_file/'.$d->file) }}"
                                    style="display:block; margin-left:auto; margin-right:auto;">
                            </a>
                            @endif
                        </div>
                        @endforeach
                        @foreach($user as $u)
                        <br>
                        <h4 class="font-weight-normal" style="text-align:center" >{{ $u->name }}
                        </h4>
                        <h6 class="font-weight-normal" style="text-align:center">{{ $u->email }}
                            </h4>
                            <h6 class="font-weight-normal" style="text-align:center" value="{{ $u->phone }}">
                                {{ $u->phone }}</h6>
                            <br>
                            <a href="{{route('editMurid',$u->id)}}" class="btn-edit3">Pengaturan Akun</a>

                            @endforeach
                            @foreach($data as $d)
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                    <i class="fas fa-user mr-2"></i>Biodata
                        <hr>
                        <table class="w-100 table-responsive-md">
                            <tbody>
                                <tr>
                                    <th>
                                        <br>
                                        Alamat
                                        <input type="text" class="form-control"
                                            value="{{ $d->provinsi }} {{ $d->kabupaten }} {{ $d->kecamatan }}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Jenis Kelamin
                                        <input type="text" class="form-control" value="{{ $d->jenis_kelamin }}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Tanggal Lahir
                                        <input type="text" class="form-control" value="{{ $d->tanggal_lahir }}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                        </div>
                        <td>
                            <a href="{{route('dataSiswa.edit',$d->id)}}" class="btn-edit4">Ubah Profil</a>
                        </td>

                    </div>
                    <!-- /.col-md-6 -->
                    @endforeach
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-user mr-2"></i>Wali
                        </div>
                    </div>
                    <hr>
                    @if(count($siswaWali) > 0)     
                        <table class="w-100 table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    @foreach($siswaWali as $sw)                             
                                    @if($sw->status_siswa != "Diterima")
                                    <th>Aksi</th>
                                    @endif
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswaWali as $sw)                             
                                <td>
                                    {{$sw->name}}
                                </td>
                                <td>
                                    {{$sw->status_siswa}}
                                </td>
                                <!-- <td> -->
                                @if($sw->status_siswa != "Diterima")
                                <td>
                                    <div>
                                        <div class="btn-group">
                                            <form class="accept" method="post" action="{{ route('siswaWali.update', $sw->id)}}" 
                                                enctype="multipart/form-data">
                                                    @method('PATCH')
                                                    @csrf
                                                <input type="hidden" name="status_siswa" id="idang" value="Diterima">
                                                <button type="submit" class="btn btn-primary delete-btn accept-confirm">
                                                Terima
                                                </button>
                                            </form> 
                                            <form class="delete" action="{{ route('siswaWali.destroy', $sw->id)}}" method="post">
                                                <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger delete-btn delete-confirm" type="submit">
                                                Tolak
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                @else
                                @endif
                                <!-- </td> -->
                                @endforeach
 
                            </tbody>
                        </table>
                        @else
                            Belum ada data wali
                        @endif  
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    @endsection