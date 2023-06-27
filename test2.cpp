#include <bits/stdc++.h>
using namespace std;


int kadane(vector<int> & a,int size){
   int max_so_far = INT_MIN, max_ending_here = 0;
 
    for (int i = 0; i < size; i++)
    {
        max_ending_here = max_ending_here + a[i];
        max_so_far = max(max_so_far, max_ending_here);
 
        if (max_ending_here < 0)
            max_ending_here = 0;
    }
    return max_so_far;
}


int main() {

int n;
cin>>n;
vector<int> vec(n);
int sum = 0;

for(int i=0;i<n;i++){
    cin>>vec[i];
    sum+=vec[i];
}


int a = kadane(vec,n);

for(int i=0;i<n;i++){
  vec[i] *=-1 ;
}
  
int b = kadane(vec,n);
  
int a1 = sum+b;


cout<<max(a,a1)<<endl;  
return 0;

}