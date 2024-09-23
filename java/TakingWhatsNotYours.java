import java.io.PrintStream;

public class TakingWhatsNotYours {
    public static void main(String[] args) throws InterruptedException {
        String[][] lyrics = {
            {"\nOoh, I still have your lighter", "0.05"},
            {"Ooh, I still have your book", "0.05"},
            {"Ooh, I still have everything you brought, but you never took", "0.06"},
            {"You know where to find me", "0.05"},
            {"And I know where to look", "0.05"},
            {"Im Im Im Im not not not a crook", "0.07"},
            {"Thievin', stealin', takin' what's not yours", "0.04"},
            {"Takin' what's not yours, takin' what's not yours", "0.04"},
            {"That's thievin', stealin', takin' what's not yours", "0.04"},
            {"Takin' what's not yours, takin' what's not yours", "0.04"},
            {"That's thievin', stealin', takin' what's not yours", "0.04"},
            {"Takin' what's not yours, takin' what's not yours", "0.04"},
            {"That's thievin', stealin', takin' what's not yours", "0.04"},
            {"Takin' what's not yours, takin' what not", "0.04"}
        };

        double[] delays = {1.7,2,5,2,3.5,1,1,1,1,1,1,1,1,1};

        for (int i = 0; i < lyrics.length; i++) {
            animateText(lyrics[i][0], Double.parseDouble(lyrics[i][1]));
            if (i < lyrics.length - 1) {
                double nextLineDelay = Math.max(0, delays[i] - lyrics[i][0].length() * Double.parseDouble(lyrics[i][1]));
                Thread.sleep((long) (nextLineDelay * 1000));
            }
        }
    }

    public static void animateText(String text, double charDelay) throws InterruptedException {
        PrintStream out = System.out;
        for (char c : text.toCharArray()) {
            out.print(c);
            out.flush();
            Thread.sleep((long) (charDelay * 1000));
        }
        out.println();
        out.flush();
    }
}