#include <stdio.h>
#include<conio.h>
void push();
void pop();
void peep();
void change();
void display();
int x,s[10],n=6,c,top=0,i;
void main()
{
	clrscr();
	do
	{
		printf("\n 1-push\n2-pop\n3-peep\n4-change\n5-display");
		printf("\n Enter your choice=");
		scanf("%d",&c);
		switch(c)
		{
			case 1:
				push();
				break;
			case 2:
				pop();
				break;
			case 3:
				peep();
				break;
			case 4:
				change();
				break;
			case 5:
			       display();
				break;
			default:
				printf("invalid chouce... select another\n");
				break;
		}

	}
		while(c<6);
		getch();
}
	void push()
	{
		if (top>=n)
		{
			printf("stack is overflow\n");
		}
		else
		{
			printf("Enter element in stack=");
			scanf("%d",&x);
			top++;
			s[top]=x;
		}
	}
	void pop()
	{if (top==0)
	{
		printf("\n stack is underflow");
	}
	else
	{
		top--;
		printf("the last element of stack is %d",s[top+1]);
	}
	}
	void peep()
	{
		printf("\n enter ith element to show=");
		scanf("%d",&i);
		if (top-i+1<=0)
		{
			printf("stack is underflow");
		}
		else
		{
			printf("the ith element of stack is %d",s[top-i+1]);
		}
	}
		void change()
		{
			printf("\n enter the ith element to change value=");
			scanf("%d",&i);
			if (top-i+1<=0)
			{
				printf("stack is underflow");
			}
			else
			{
				printf("enter value=");
				scanf("%d",&x);
				s[top-i+1]=x;
			}
		}
			void display()
			{
				printf("your stack is here...\n");
				for (i = 1; i <=6; i++)
				{
					printf("s[%d]=%d\n",i,s[i]);
				}
			}
			