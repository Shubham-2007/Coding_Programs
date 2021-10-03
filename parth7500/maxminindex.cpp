#include<iostream>
#include<cstdio>
#include<cstdlib>
using namespace std;
int main()
 {
	//code
	int test;
	cin>>test;
    while(test--)
    {
        long int n;
        cin>>n;
        long int max=0;
        unsigned long int arr[n];
        for(long int i=0;i<n;i++)
        {
            //cin>>arr[i];
            scanf("%lu",&arr[i]);
        }
        for(long int i=0;i<n;i++)
        {
            for(long int j=i+1;j<n;j++)
            {
                if(arr[i]<=arr[j])
                {
                    if(j-i>max)
                        max=j-i;
                }
            }
        }
        cout<<max<<endl;
    }
	return 0;
}
/*
#include<bits/stdc++.h>
#define fast ios:: sync_with_stdio(false);cin.tie(NULL)
using namespace std;
int main()
 {
     fast;
 int t;
 cin>>t;
 while(t--)
 {
     long int n;
     cin>>n;
     long int *p;
     p=new long int[n];
     for(int i=0; i<n; i++)
     {
         cin>>p[i];
     }
     long int b[n];
      int k=0;
       int flag=0;
        if(n==1)
        {
            cout<<"0";
        }
        if(n>1)
        {
     for(int i=0; i<n-1; i++)
     {
         for(int j=n-1; j>i; j--)
         {
             if(p[i]<=p[j])
             {
                 flag=1;
                 b[k++]=j-i;
                  break;

             }
         }

     }
     if (flag==0)
     {
         cout<<"1";
     }
     if(flag==1)
     {
        sort(b, b+k, greater<long int>());
          cout<<b[0];
      }
        }
      cout<<endl;
 }
	//code
	return 0;
}*/
