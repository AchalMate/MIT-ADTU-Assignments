%{
    #include <stdio.h>
%}
%%
[aeiouAEIOU].*          printf("accepted\n");

.*|\n                   printf("not accepted\n");
%%
int yywrap()
{
    return 1;
}

int main()
{
    yylex();
    return 0;
}