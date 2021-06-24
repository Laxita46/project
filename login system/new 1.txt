import java.util.*;
  
  public class Main{
  
  public static void main(String[] args) {
      Scanner scn = new Scanner(System.in);
  
       // write ur code here
       int t = scn.nextInt();
       for(int i = 1;i<=t;i++)
       {
           int n = scn.nextInt();
           int j;
           for( j = 2;j*j<=n;j++)
           {
               if(n%j==0)
               {
               
                   System.out.println("not prime");
               }
               
            }
            if(j*j>n)
               {
                   System.out.println(" prime");
               }
                   
            
           
       }
  
   }
  }