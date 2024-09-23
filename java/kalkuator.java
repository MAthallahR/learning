import java.util.Scanner;
public class kalkuator {
    public static void main(String [] args) {   
        try (Scanner input = new Scanner(System.in)) {
          int pilihan,angka1,angka2,h; 

          System.out.println("=== Kalkulator Sederhana ==="); 
          System.out.println("\n1. Pertambahan");
          System.out.println("2. Pengurangan");
          System.out.println("3. Perkalian"); 
          System.out.println("4. Pembagian");

          System.out.println("\nSilahkan masukan nomor yang anda inginkan");

          pilihan = input.next().charAt(0);

          switch (pilihan) {
              case '1':
              System.out.println("\nMasukan angka pertama");
               angka1 = input.nextInt();   

              System.out.println("\nMasukan angka kedua");
               angka2 = input.nextInt();
    
              h = angka1+angka2;
          System.out.println(" ");
          System.out.println(angka1 + " + " + angka2 + " = " + h);
          break;
              case '2':
              System.out.println("\nMasukan angka pertama");
                angka1 = input.nextInt();   

              System.out.println("\nMasukan angka kedua");
               angka2 = input.nextInt();
    
              h = angka1-angka2;
          System.out.println(" ");
          System.out.println(angka1 + " - " + angka2 + " = " + h);
          break;
              case '3':
              System.out.println("\nMasukan angka pertama");
                angka1 = input.nextInt();   

              System.out.println("\nMasukan angka kedua");
                angka2 = input.nextInt();
    
            h = angka1*angka2;
          System.out.println(" ");
          System.out.println(angka1 + " x " + angka2 + " = " + h);
          break;
              case '4':
              System.out.println("\nMasukan angka pertama");
                angka1 = input.nextInt();   

              System.out.println("\nMasukan angka kedua");
                angka2 = input.nextInt();
    
            h = angka1/angka2;
          System.out.println(" ");
          System.out.println(angka1 + " : " + angka2 + " = " + h);
          break;
          default:
          System.out.println("\nPilihan anda tidak valid");
          }
        }
    }
}