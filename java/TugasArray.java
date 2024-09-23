import java.util.*;
public class TugasArray {
    public static void main(String[] args) {
        @SuppressWarnings("resource")
        Scanner sc = new Scanner(System.in);
        int i;
        int jumlah;
        int[] array1=new int[5];
        int[] array2,array3;
        
        System.out.println("Soal Satu");
        for(i=0;i<array1.length;i++){
            System.out.print("Angka ke "+(i+1)+" : ");
            array1[i]=sc.nextInt();
        }
            System.out.print("Array sebelumnya : "+Arrays.toString(array1));

        for ( i = 0; i < 1; i++) {
            int t = array1[i];
            array1[i] = array1[array1.length - i - 1];
            array1[array1.length - i - 1] = t;
            System.out.print("\nArray sesudahnya : "+Arrays.toString(array1));
        }
        System.out.println("\n\nSoal Dua");
        System.out.print("Masukan Jumlah : ");
        jumlah=sc.nextInt();
        array2=new int [jumlah];
        for(i=0;i<jumlah;i++){
            System.out.print("Jumlah ke "+(i+1)+" : ");
            array2[i]=sc.nextInt();
        }
            for (int j : array2) {
                if(j%2 !=0){
                    System.out.println("Huruf ganjilnya adalah : "+j);
                }
            }
            for (int k : array2) {
                if (k%2 <= 0) {
                    System.out.println("Huruf genapnya adalah : "+k);
                }
            }        
        System.out.println("\n\nSoal Tiga");
        System.out.print("Masukan Angka : ");
        jumlah=sc.nextInt();
        array3=new int [jumlah];
        for(i=0;i<jumlah;i++){
            System.out.print("Angka ke "+(i+1)+" : ");
            array3[i]=sc.nextInt();
        }
        int tb = array3[0];
		for (i = 0; i < array3.length; i++) {
            if (array3[i]>tb){
                tb = array3[i];
			}
		}
    	System.out.println("Bilangan terbesarnya adalah : "+tb);
    }
}
