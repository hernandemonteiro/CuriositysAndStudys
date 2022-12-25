#include <stdio.h>

int main()
{
    printf("************************************\n");
    printf("* Bem-vindo ao jogo da advinhação! *\n");
    printf("************************************\n");

    // int numerosecreto;
    // numerosecreto = 42;

    int chute;
    printf("Qual é seu chute? \n");
    scanf("%d", &chute);
    printf("Seu chute foi %d!\n", chute);
}
