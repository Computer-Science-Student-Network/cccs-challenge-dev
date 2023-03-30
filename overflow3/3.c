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

    puts("Now a harder one, Can you set x to C0D1E??");
    gets(inp);
    if (x == 0xC0D1E) {
        win();
    }
}
