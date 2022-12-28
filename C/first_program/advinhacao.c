#include <stdio.h>

int main()
{
    printf("************************************\n");
    printf("* Bem-vindo ao jogo da advinhação! *\n");
    printf("************************************\n");

    int numeroSecreto = 5;
    int ganhou = 0;
    int tentativas = 1;

    while (!ganhou)
    {
        int chute;
        printf("Qual é seu chute? \n");
        scanf("%d", &chute);
        printf("Tentativas: %d;\n", tentativas);

        int acertouNumero = chute == numeroSecreto;
        int numeroMaiorQueSecreto = chute > numeroSecreto;

        if (chute < 0)
        {
            printf("O numero chutado não pode ser negativo!\n");
            continue;
        }

        if (acertouNumero)
        {
            printf("Parabéns, Você acertou o numero!\n");
            break;
        }
        else if (numeroMaiorQueSecreto)
        {
            printf("Seu numero é maior que o numero secreto!\n");
        }
        else
        {
            printf("Seu numero é menor que o numero secreto!\n");
        }

        tentativas++;
    }
}
