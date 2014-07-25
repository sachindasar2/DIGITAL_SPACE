    acount=0;
    t=document.getElementById("tools");
    aa=["images/T.png","images/TCnew.png"];
    atotal=aa.length-1;

    bcount=0;
    h=document.getElementById("heart");
    bb=["images/H.png","images/HCnew.png"];
    btotal=bb.length-1;

    ccount=0;
    d=document.getElementById("hat");
    cc=["images               /D.png","images/DCnew.png"];
    ctotal=cc.length-1;

    function a(){
    acount++;
    if(acount>atotal){
    acount=0;
    }
    t.src=aa[acount];

    }

    t.onclick=a;




    function b(){
    bcount++;
    if(bcount>btotal){
    bcount=0;
    }
    h.src=bb[bcount];

    }

    h.onclick=b;

    function c(){
    ccount++;
    if(ccount>ctotal){
    ccount=0;
    }
    d.src=cc[ccount];

    }

    d.onclick=c;
