import java.util.ArrayList;
import java.util.Scanner;

// Kelas utama Main yang berfungsi sebagai entry point program
class Main{
    public static void cetakTabel(ArrayList<Baju> daftarBaju) {
        String[] headers = {"ID", "Nama", "Stok", "Harga", "Jenis", "Bahan", "Warna", "Untuk", "Size", "Merk"};
        int[] columnWidths = new int[headers.length];
        
        for (int i = 0; i < headers.length; i++) {
            columnWidths[i] = headers[i].length();
        }
        
        for (Baju b : daftarBaju) {
            columnWidths[0] = Math.max(columnWidths[0], b.getId().length());
            columnWidths[1] = Math.max(columnWidths[1], b.getNama().length());
            columnWidths[2] = Math.max(columnWidths[2], b.getStok().length());
            columnWidths[3] = Math.max(columnWidths[3], b.getHarga().length());
            columnWidths[4] = Math.max(columnWidths[4], b.getJenis().length());
            columnWidths[5] = Math.max(columnWidths[5], b.getBahan().length());
            columnWidths[6] = Math.max(columnWidths[6], b.getWarna().length());
            columnWidths[7] = Math.max(columnWidths[7], b.getUntuk().length());
            columnWidths[8] = Math.max(columnWidths[8], b.getSize().length());
            columnWidths[9] = Math.max(columnWidths[9], b.getMerk().length());
        }
        
        String format = "";

        for (int width : columnWidths) {
            System.out.print("+-" + "-".repeat(width) + "-");
        }
        System.out.println("+");

        for (int width : columnWidths) {
            format += "| %" + (-width) + "s ";
        }
        format += "|%n";
        
        System.out.printf(format, (Object[]) headers);
        for (int width : columnWidths) {
            System.out.print("+-" + "-".repeat(width) + "-");
        }
        System.out.println("+");
        
        for (Baju b : daftarBaju) {
            System.out.printf(format, b.getId(), b.getNama(), b.getStok(), b.getHarga(),
                    b.getJenis(), b.getBahan(), b.getWarna(), b.getUntuk(), b.getSize(), b.getMerk());
        }

        for (int width : columnWidths) {
            System.out.print("+-" + "-".repeat(width) + "-");
        }
        System.out.println("+");
    }
    public static void main(String[] args) {
        ArrayList<Baju> daftarBaju = new ArrayList<>();
        Scanner scanner = new Scanner(System.in);
        
        Baju baju1 = new Baju();
        baju1.setId("A001");
        baju1.setNama("Jaket Anjing Sporty");
        baju1.setStok("10");
        baju1.setHarga("Rp200.000");
        baju1.setJenis("Sport");
        baju1.setBahan("Waterproof");
        baju1.setWarna("Hitam");
        baju1.setUntuk("Anjing");
        baju1.setSize("L");
        baju1.setMerk("PetFashion");
        daftarBaju.add(baju1);

        Baju baju2 = new Baju();
        baju2.setId("A002");
        baju2.setNama("Sweater Kucing Cozy");
        baju2.setStok("8");
        baju2.setHarga("Rp150.000");
        baju2.setJenis("Casual");
        baju2.setBahan("Wool");
        baju2.setWarna("Merah");
        baju2.setUntuk("Kucing");
        baju2.setSize("M");
        baju2.setMerk("CatStyle");
        daftarBaju.add(baju2);
        
        Baju baju3 = new Baju();
        baju3.setId("A003");
        baju3.setNama("Baju Kuda Elegan");
        baju3.setStok("5");
        baju3.setHarga("Rp350.000");
        baju3.setJenis("Elegan");
        baju3.setBahan("Satin");
        baju3.setWarna("Putih");
        baju3.setUntuk("Kuda");
        baju3.setSize("XL");
        baju3.setMerk("Equine Couture");
        daftarBaju.add(baju3);
        
        Baju baju4 = new Baju();
        baju4.setId("A004");
        baju4.setNama("Rompi Hamster Mini");
        baju4.setStok("8");
        baju4.setHarga("Rp50.000");
        baju4.setJenis("Mini");
        baju4.setBahan("Cotton");
        baju4.setWarna("Biru");
        baju4.setUntuk("Hamster");
        baju4.setSize("S");
        baju4.setMerk("TinyPets");
        daftarBaju.add(baju4);
        
        Baju baju5 = new Baju();
        baju5.setId("A005");
        baju5.setNama("Baju Reptil Stylish");
        baju5.setStok("1");
        baju5.setHarga("Rp100.000");
        baju5.setJenis("Trendy");
        baju5.setBahan("Polyester");
        baju5.setWarna("Hijau");
        baju5.setUntuk("Reptil");
        baju5.setSize("M");
        baju5.setMerk("ReptileTrend");
        daftarBaju.add(baju5);

        System.out.print("Berapa banyak data yang akan diinput: ");
        int n = scanner.nextInt();
        scanner.nextLine(); 
        
        for (int i = 0; i < n; i++) {
            Baju temp = new Baju();
            System.out.print("Masukkan ID: ");
            temp.setId(scanner.nextLine());
            System.out.print("Masukkan Nama: ");
            temp.setNama(scanner.nextLine());
            System.out.print("Masukkan Stok: ");
            temp.setStok(scanner.nextLine());
            System.out.print("Masukkan Harga: ");
            temp.setHarga(scanner.nextLine());
            System.out.print("Masukkan Jenis: ");
            temp.setJenis(scanner.nextLine());
            System.out.print("Masukkan Bahan: ");
            temp.setBahan(scanner.nextLine());
            System.out.print("Masukkan Warna: ");
            temp.setWarna(scanner.nextLine());
            System.out.print("Masukkan Untuk: ");
            temp.setUntuk(scanner.nextLine());
            System.out.print("Masukkan Size: ");
            temp.setSize(scanner.nextLine());
            System.out.print("Masukkan Merk: ");
            temp.setMerk(scanner.nextLine());
            daftarBaju.add(temp);
            System.out.println("Data berhasil ditambahkan!\n");
        }
        
        System.out.println("\nMenampilkan data");
        cetakTabel(daftarBaju);

        scanner.close();
    }
}