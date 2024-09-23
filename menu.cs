using System;

public class tes
{
    public static void Main(string[] args)
    {
	{
		Console.WriteLine("                         SELAMAT DATANG                                       ");
		Console.WriteLine("                         NASI MAS RUSDI                                       ");
		Console.WriteLine("                           ALA NGAWI                                          ");
		Console.WriteLine("-----------------------------------------------------------------");
		menu:
		Console.WriteLine("\nSilahkan Pilih Menu");
		int makanan;
		menumakanan:
		Console.WriteLine("\n=Menu Makanan=                	                   Harga");
		Console.WriteLine("\n1.Ayam Goreng Pulu-Pulu                              Rp.8.000");
		Console.WriteLine("2.Nasi Goreng Awor Awor Mantap                       Rp.13.000");
		Console.WriteLine("3.Mie Pangsit Situnaga                               Rp.14.000");
		Console.WriteLine("4.Nasi Asoy Geboy                                    Rp.10.000");
		Console.WriteLine("5.Nasi Campur Awor Awor                              Rp.13.500");
		int minuman;
		menuminuman:
		Console.WriteLine("\n=Menu Minuman=                	                   Harga");
		Console.WriteLine("\n1.Teh                                                Rp.5.000");
		Console.WriteLine("2.Jus Jeruk                                          Rp.9.000");
		Console.WriteLine("3.Kopi                                               Rp.5.000");
		Console.WriteLine("4.Air Putih                                          Rp.0");		
		Console.Write("\nSilahkan Pilih Makanan Anda : ");
		makanan =int.Parse(Console.ReadLine());
		if (makanan >= 6 && makanan <= 100000){
			Console.WriteLine("\nSilahkan Pilih Makanan Yang Sesuai");
			goto menumakanan;
		}
		Console.Write("\nSilahkan Pilih Minuman Anda : ");
		minuman =int.Parse(Console.ReadLine());
		if (minuman >= 5 && minuman <= 100000){
			Console.WriteLine("\nSilahkan Pilih Minuman Yang Sesuai ");
			goto menuminuman;
		}	
		Console.WriteLine("");
		if (makanan ==1){
			Console.WriteLine("Anda Memesan       : Ayam Goreng Pulu-Pulu");
			Console.WriteLine("Harga Pesanan      : Rp.8.000");
			Console.Write("Masukan Jumlah     : ");
			int jumlah = Convert.ToInt32(Console.ReadLine());
			int total = Convert.ToInt32(jumlah * 8000);
			Console.WriteLine("\nTotal : " + "Rp." + total + "-");
					Console.WriteLine();
				kurang:
				Console.Write("\nJumlah Uang : ");
				int uang = Convert.ToInt32(Console.ReadLine());
				if (uang <= total){
			Console.WriteLine("\nMaaf Uang Tidak Cukup\n\n");
			goto kurang;
				}
				int kembalian = Convert.ToInt32(uang-total);
				Console.WriteLine();
	     		Console.WriteLine("Kembailan : " + "Rp." + kembalian);
		}
		if (makanan ==2){
			Console.WriteLine("Anda Memesan       : Nasi Goreng Awor Awor Mantap");
			Console.WriteLine("Harga Pesanan      : Rp.13.000");
			Console.Write("Masukan Jumlah     : ");
			int jumlah = Convert.ToInt32(Console.ReadLine());
			int total = Convert.ToInt32(jumlah * 13000);
			Console.WriteLine("\nTotal : " + "Rp." + total + "-");
					Console.WriteLine();
				kurang:
				Console.Write("\nJumlah Uang : ");
				int uang = Convert.ToInt32(Console.ReadLine());
				if (uang <= total){
			Console.WriteLine("\nMaaf Uang Tidak Cukup\n\n");
			goto kurang;
				}
				int kembalian = Convert.ToInt32(uang-total);
				Console.WriteLine();
	     		Console.WriteLine("Kembailan : " + "Rp." + kembalian);
		}
		if (makanan ==3){
			Console.WriteLine("Anda Memesan       : Mie Pangsit Situnaga");
			Console.WriteLine("Harga Pesanan      : Rp.14.000");
			Console.Write("Masukan Jumlah     : ");
			int jumlah = Convert.ToInt32(Console.ReadLine());
			int total = Convert.ToInt32(jumlah * 14000);
			Console.WriteLine("\nTotal : " + "Rp." + total + "-");
					Console.WriteLine();
				kurang:
				Console.Write("\nJumlah Uang : ");
				int uang = Convert.ToInt32(Console.ReadLine());
				if (uang <= total){
			Console.WriteLine("\nMaaf Uang Tidak Cukup\n\n");
			goto kurang;
				}
				int kembalian = Convert.ToInt32(uang-total);
				Console.WriteLine();
	     		Console.WriteLine("Kembailan : " + "Rp." + kembalian);
		}
		if (makanan ==4){
			Console.WriteLine("Anda Memesan       : Nasi Asoy Geboy");
			Console.WriteLine("Harga Pesanan      : Rp.10.000");
			Console.Write("Masukan Jumlah     : ");
			int jumlah = Convert.ToInt32(Console.ReadLine());
			int total = Convert.ToInt32(jumlah * 10000);
			Console.WriteLine("\nTotal : " + "Rp." + total + "-");
					Console.WriteLine();
				kurang:
				Console.Write("\nJumlah Uang : ");
				int uang = Convert.ToInt32(Console.ReadLine());
				if (uang <= total){
			Console.WriteLine("\nMaaf Uang Tidak Cukup\n\n");
			goto kurang;
				}
				int kembalian = Convert.ToInt32(uang-total);
				Console.WriteLine();
	     		Console.WriteLine("Kembailan : " + "Rp." + kembalian);
		}
		if (makanan ==5){
			Console.WriteLine("Anda Memesan       : Nasi Campur Awor Awor");
			Console.WriteLine("Harga Pesanan      : Rp.13.500");
			Console.Write("Masukan Jumlah     : ");
			int jumlah = Convert.ToInt32(Console.ReadLine());
			int total = Convert.ToInt32(jumlah * 13500);
			Console.WriteLine("\nTotal : " + "Rp." + total + "-");
					Console.WriteLine();
				kurang:
				Console.Write("\nJumlah Uang : ");
				int uang = Convert.ToInt32(Console.ReadLine());
				if (uang <= total){
			Console.WriteLine("\nMaaf Uang Tidak Cukup\n\n");
			goto kurang;
				}
				int kembalian = Convert.ToInt32(uang-total);
				Console.WriteLine();
	     		Console.WriteLine("Kembailan : " + "Rp." + kembalian);
		}
		if (minuman ==1){
			Console.WriteLine("\nAnda Memesan       : Teh");
			Console.WriteLine("Harga Pesanan      : Rp.5.000");
			Console.Write("Masukan Jumlah     : ");
			int jumlah = Convert.ToInt32(Console.ReadLine());
			int total = Convert.ToInt32(jumlah * 5000);
			Console.WriteLine("\nTotal : " + "Rp." + total + "-");
					Console.WriteLine();
				kurang:
				Console.Write("\nJumlah Uang : ");
				int uang = Convert.ToInt32(Console.ReadLine());
				if (uang <= total){
			Console.WriteLine("\nMaaf Uang Tidak Cukup\n\n");
			goto kurang;
				}
				int kembalian = Convert.ToInt32(uang-total);
				Console.WriteLine();
	     		Console.WriteLine("Kembailan : " + "Rp." + kembalian);
		}
		if (minuman ==2){
			Console.WriteLine("\nAnda Memesan       : Jus Jeruk");
			Console.WriteLine("Harga Pesanan      : Rp.9.000");
			Console.Write("Masukan Jumlah     : ");
			int jumlah = Convert.ToInt32(Console.ReadLine());
			int total = Convert.ToInt32(jumlah * 9000);
			Console.WriteLine("\nTotal : " + "Rp." + total + "-");
					Console.WriteLine();
				kurang:
				Console.Write("\nJumlah Uang : ");
				int uang = Convert.ToInt32(Console.ReadLine());
				if (uang <= total){
			Console.WriteLine("\nMaaf Uang Tidak Cukup\n\n");
			goto kurang;
				}
				int kembalian = Convert.ToInt32(uang-total);
				Console.WriteLine();
	     		Console.WriteLine("Kembailan : " + "Rp." + kembalian);
		}
		if (minuman ==3){
			Console.WriteLine("\nAnda Memesan       : Kopi");
			Console.WriteLine("Harga Pesanan      : Rp.5.000");
			Console.Write("Masukan Jumlah     : ");
			int jumlah = Convert.ToInt32(Console.ReadLine());
			int total = Convert.ToInt32(jumlah * 5000);
			Console.WriteLine("\nTotal : " + "Rp." + total + "-");
					Console.WriteLine();
				kurang:
				Console.Write("\nJumlah Uang : ");
				int uang = Convert.ToInt32(Console.ReadLine());
				if (uang <= total){
			Console.WriteLine("\nMaaf Uang Tidak Cukup\n\n");
			goto kurang;
				}
				int kembalian = Convert.ToInt32(uang-total);
				Console.WriteLine();
	     		Console.WriteLine("Kembailan : " + "Rp." + kembalian);
		}
		if (minuman ==4){
			Console.WriteLine("\nAnda Memesan       : Air Putih");
			Console.WriteLine("Harga Pesanan      : Rp.0");
			Console.Write("Masukan Jumlah     : ");
			int jumlah = Convert.ToInt32(Console.ReadLine());
			int total = Convert.ToInt32(jumlah * 0);
			Console.WriteLine("\nTotal : " + "Rp." + total + "-");
					Console.WriteLine();
				kurang:
				Console.Write("\nJumlah Uang : ");
				int uang = Convert.ToInt32(Console.ReadLine());
				if (uang <= total){
			Console.WriteLine("\nMaaf Uang Tidak Cukup\n\n");
			goto kurang;
				}
				int kembalian = Convert.ToInt32(uang-total);
				Console.WriteLine();
	     		Console.WriteLine("Kembailan : " + "Rp." + kembalian);
		}
		Console.WriteLine("\nTerimakasih Sudah Memesan");
		Console.WriteLine("\nApakah Ingin Memesan Lagi");
		Console.Write("Ya/");
		Console.Write("Tidak : ");
		string yt = Console.ReadLine();
		if (yt == "ya" || yt == "Ya")
		{
			goto menu;
		}
		else if (yt == "tidak" || yt == "Tidak")
		{
			Console.WriteLine("\nTerimakasih Sudah Makan Di Sini ");
			Console.WriteLine("------------------------------------------------------------");
		}
	}
}