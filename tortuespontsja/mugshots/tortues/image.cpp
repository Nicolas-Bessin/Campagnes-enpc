#include "image.h"
#include <Imagine/Graphics.h>
using namespace std;
using namespace Imagine;

image::image(char* n,int&W,int&H){
    w=W,h=H;
    name=n;
    loadColorImage(name,r,g,b,w,h);
}

void image::detruit(){
    delete[] r,g,b;
}

void image::affiche(){
    putColorImage(0,0,r,g,b,w,h);
}

byte image::get(int i, int j){
    return r[3*(i+j*h)];
}

void image::set(int i, int j, byte g){
    r[i+j*h] = g;
    g[]
}

void image::save(){
    saveColorImage(name,r,g,b,w,h);
}
