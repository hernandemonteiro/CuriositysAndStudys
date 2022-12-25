#include <stdio.h>

#define NUMERO_DE_TENTATIVAS 5

int main()
{
    printf("************************************\n");
    printf("* Bem-vindo ao jogo da advinhação! *\n");
    printf("************************************\n");

    int numeroSecreto = 5;

    for (int i = 1; i <= NUMERO_DE_TENTATIVAS; i++)
    {
        int chute;
        printf("Qual é seu chute? \n");
        scanf("%d", &chute);

        int acertouNumero = chute == numeroSecreto;
        int chancesDeAcertar = NUMERO_DE_TENTATIVAS - i;
        int numeroMaiorQueSecreto = chute > numeroSecreto;

        if (chute < 0)
        {
            printf("O numero chutado não pode ser negativo!\n");
            i--;
            continue;
        }

        if (acertouNumero)
        {
            printf("Parabéns, Você acertou o numero!\n");
            break;
        }
        else if (numeroMaiorQueSecreto)
        {
            printf("Você ainda tem %d chances de acertar!\n", chancesDeAcertar);
            printf("Seu numero é maior que o numero secreto!\n");
        }
        else
        {
            printf("Você ainda tem %d chances de acertar!\n", chancesDeAcertar);
            printf("Seu numero é menor que o numero secreto!\n");
        }
    }
}
