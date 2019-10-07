// AplicacionTerminal.cpp: define el punto de entrada de la aplicación de consola.
//

#include "stdafx.h"


int _tmain(int argc, _TCHAR* argv[])
{
	printf("Hola a todos");

	for (int i = 1; i < 10; i++) {
		printf("%d \n", i);
	}

	getchar();

	return 0;
}

