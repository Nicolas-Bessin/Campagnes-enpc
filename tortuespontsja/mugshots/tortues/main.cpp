#include <iostream>
#include <Imagine/Graphics.h>
#include <string>
using namespace std;
using namespace Imagine;

void change(string name){
    int w=500,h=500;
    byte *rgb;
    loadColorImage(name,rgb,w,h);
    for (int i=0;i<w*h;i++){
        if (rgb[3*i]+rgb[3*i+1]+rgb[3*i+2]>240*3)
            for(int j=0;j<3;j++)
                rgb[3*i+j]=221;
    }
    saveColorImage(name,rgb,w,h);
}

int main()
{
    string noms[11] = {"fantin.jpg",
                      "gogo.png",
                     "laure.jpg",
                     "max.png",
                     "nico.jpg",
                     "pol.png",
                     "prez.jpg",
                     "rémi.jpg",
                     "zanne.jpg",
                     "zauriane.jpg",
                     "zzandré.jpg"};
    for (int i=0;i<11;i++){
        change("C:\\wamp64\\www\\pontsja_4\\mugshots\\"+noms[i]);
    }
    return 0;
}
