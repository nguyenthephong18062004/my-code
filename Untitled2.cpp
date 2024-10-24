#include<conio.h>
#include<stdio.h>
#include<conio.h>
#include<string>
#include<iostream>
using namespace std;
int k, N;
string bangkytu="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
int    banggiatri[26]={0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25};
string rochu, machu;
int roso[255], maso[255];
int main()
{
	cout<<"Nhap ban tin can ma hoa(rochu):";
	getline(cin, rochu);
	int i , j, dodai=rochu.length();
	cout<<"\nBang ro so:";
	for (i=0; i < dodai; i++){
		for (j = 0; j < 26; j++){
			if(rochu[i]==bangkytu[j]){
				roso[i]=banggiatri[j];
				cout<<" "<<roso[i];
			}
		}
	}
	k=3;
	cout<<"\nBang ma so:";
	for(i=0; i<dodai; i++){
		maso[i] = (roso[i] + k) % N;
		cout<<" "<<maso[i];
	}
	cout<<"\nBang ma chu:";
	for (i=0; i<dodai; i++){
		for (j=0; j<N; j++){
			if(maso[i]==banggiatri[j]){
				machu[i]=bangkytu[j];
				cout<<" "<<machu[i];
			}
		}
	}
	return 0;
}
