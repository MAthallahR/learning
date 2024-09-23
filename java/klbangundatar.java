import java.util.*;

public class klbangundatar {
    public static void main(String[] args) {
        @SuppressWarnings("resource")
        Scanner sc = new Scanner(System.in);
        int bd,s,h1,h2,s1,s2,s3,a,t;
        float r;
        float p=22f/7;
        float hf1,hf2;

        System.out.println("Masukan bangun datar");
        System.out.println("1.Persegi");
        System.out.println("2.Segitiga");
        System.out.println("3.Lingkaran");
        System.out.println("======================");
        bd=sc.nextInt();
         switch (bd) {
            case 1:     
                System.out.println("\nAnda memilih persegi");
                System.out.print("Masukan sisi = ");
                s=sc.nextInt();
                h1=s*4;
                h2=s*s;
                System.out.println(" ");
                System.out.println("Kelilingnya adalah = "+h1);
                System.out.println("Luasnya adalah     = "+h2);
             break;
             case 2:
             System.out.println("\nAnda memilih segitiga");
             System.out.print("Masukan sisi kesatu = ");
             s1=sc.nextInt();
             System.out.print("Masukan sisi kedua  = ");
             s2=sc.nextInt();
             System.out.print("Masukan sisi ketiga = ");
             s3=sc.nextInt();
             h1=s1+s2+s3;

             System.out.println(" ");
             System.out.print("Masukan alas   = ");
             a=sc.nextInt();
             System.out.print("Masukan tinggi = ");
             t=sc.nextInt();
             h2=a*t/2;
             System.out.println(" ");
             System.out.println("Kelilingnya adalah = "+h1);
             System.out.println("Luasnya adalah     = "+h2);
             break;
             case 3:     
                System.out.println("\nAnda memilih lingkaran");
                System.out.print("Masukan jari jari = ");
                r=sc.nextFloat();   
                hf1=2*p*r;
                hf2=p*r*r;
                System.out.println(" ");
                System.out.println("Kelilingnya adalah = "+hf1);
                System.out.println("Luasnya adalah     = "+hf2);
            break;
            default:
            System.out.println("\nPilihan anda tidak valid");
        }
    }
}
