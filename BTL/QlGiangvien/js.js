
var msv =[];
var ht =[];
var dc =[];
var ns =[];
var cmt =[];
for (let index = 1;  index<=100  /* msv[index]!= undefined*/ ; index++) {
    msv[index]= 'smsv'+index;
    console.log(msv[index]);
    ht[index]= 'sht'+index;
    console.log(ht[index]);
    dc[index]= 'sdc'+index;
    console.log(dc[index]);
    ns[index]= 'sns'+index;
    console.log(ns[index]);
    cmt[index]= 'scmt'+index;
    console.log(cmt[index]);
}
// cmt.slice(15, 25) ;
function sua(id){
    var masvv = document.getElementById(msv[id]).innerHTML;
    document.getElementById("masvv").value = masvv;
    document.getElementById("masinhvien").value = masvv;
    var     
    
    htv = document.getElementById(ht[id]).innerHTML;
    document.getElementById("htv").value = htv;
    var dcv = document.getElementById(dc[id]).innerHTML;
    document.getElementById("dcv").value = dcv;
    var nsv = document.getElementById(ns[id]).innerHTML;
    document.getElementById("nsv").value = nsv;
    var cmtv = document.getElementById(cmt[id]).innerHTML;
    document.getElementById("cmtv").value = cmtv;
}
function xoa(id){
    var masvv = document.getElementById(msv[id]).innerHTML;
    document.getElementById("maxoa").value = masvv;

}