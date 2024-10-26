import java.io.PrintStream;

public class NoOneNoticed {
   public NoOneNoticed() {
   }

   public static void main(String[] var0) throws InterruptedException {
      String[][] var1 = new String[][]{
         {"Maybe I (I kind of like it if you call me)", "0.10"},
         {"Is not right ('cause I'm so over being lonely)", "0.09"},
         {"Make you mine (I've made a virtual connection)", "0.10"},
         {"Take our time (be my video obsession)", "0.12"},
         {"Come on, don't leave me it can't be that easy, babe", "0.09"},
         {"If you believe me I guess I'll get on a plane", "0.10"},
         {"Fly to your city excited to see your face", "0.11"},
         {"Hold me, console me and then I leave without a trace", "0.09"},
         {"Come on, don't leave me it can't be that easy, babe", "0.09"},
         {"If you believe me I guess I'll get on a plane", "0.10"},
         {"Fly to your city excited to see your face", "0.10"}
      };

      // Updated sleep times based on the provided timestamps
      double[] var2 = new double[]{4.2,4.5,4.5,6.2,4.2,4.6,4.7,3.5,4.5,3.3,4.2,4.2,4.5,3.7};

      for(int var3 = 0; var3 < var1.length; ++var3) {
         animateText(var1[var3][0], Double.parseDouble(var1[var3][1]));
         if (var3 < var1.length - 1) {
            double var4 = Math.max(0.0, var2[var3] - (double)var1[var3][0].length() * Double.parseDouble(var1[var3][1]));
            Thread.sleep((long)(var4 * 1000.0));
         }
      }
   }

   public static void animateText(String var0, double var1) throws InterruptedException {
      PrintStream var3 = System.out;
      char[] var4 = var0.toCharArray();
      int var5 = var4.length;

      for(int var6 = 0; var6 < var5; ++var6) {
         char var7 = var4[var6];
         var3.print(var7);
         var3.flush();
         Thread.sleep((long)(var1 * 1000.0));
      }

      var3.println();
      var3.flush();
   }
}