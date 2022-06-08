%{
    #include <stdio.h>
    #include <string.h>
    int len, count = 0;
%}
%%
[a-zA-Z]+       {
                    len = strlen(yytext);
                    if(len > 5 && len < 10)
                        count++;
                }

.              ;

"\n"           {
                    printf("words = %d\n", count);
                    count = 0;
               }
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