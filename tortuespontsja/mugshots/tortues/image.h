#pragma once
#include <Imagine/Graphics.h>

using namespace std;
using namespace Imagine;

class image{
    byte *r,*g,*b;
    char* name;
    void alloue();
public:
    int w,h;
    image(char* n, int& W, int& H);
    void detruit();
    void affiche();
    byte get(int i, int j);
    void set(int i, int j, byte g);
    void save();
};
