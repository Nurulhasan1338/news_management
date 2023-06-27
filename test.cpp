#include <bits/stdc++.h>
using namespace std;

int main() {

  int n;
  cin>>n;
  int ans;
  cin>>ans;
  
  for(int i=1;i<n;i++){
    int t;
    cin>>t;
    ans = max(ans+t,t);
  }
  
  cout<<ans;

  return 0;

}