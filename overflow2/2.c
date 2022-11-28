#include <stdio.h>
#include <stdlib.h>

void win() {
    system("cat flag.txt");
}

int main() {
    setbuf(stdout, NULL);
    setbuf(stdin, NULL);
    setbuf(stderr, NULL);

    unsigned int x = 0;
    char inp[8];

    puts("Can you set x to 'A'?");
    gets(inp);
    if (x == 0x41) {
        win();
    }
}
