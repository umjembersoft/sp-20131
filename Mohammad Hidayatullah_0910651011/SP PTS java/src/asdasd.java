/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
import javax.swing.JOptionPane; //meng-import class JOptionPane dari package javax.swing

public class asdasd{ 
public static void main(String[] args){

/*pendeklarasian variable*/
String input1; 
String input2; 
float nilai1;
float nilai2;
float jumlah, kurang, kali, bagi; 


/*menampilkan sebuah dialog yang berisi output dari inputan yang telah kita berikan dan sebuah OK button.*/
input1 = JOptionPane.showInputDialog("Masukan angka pertama");
input2 = JOptionPane.showInputDialog("Masukan angka Kedua");

nilai1 = Integer.parseInt(input1);
nilai2 = Integer.parseInt(input2);

/*pengoperasian nilai1 dan nilai2 dengan operator +, - , *, dan / */
jumlah = nilai1 + nilai2;
kurang = nilai1 - nilai2;
kali = nilai1 * nilai2;
bagi = nilai1 / nilai2;

/*outputnya dengan menggunakan message dialog berbasis GUI*/
JOptionPane.showMessageDialog(null, "Hasil Penjumlahan "+jumlah,"Jumlah",JOptionPane.PLAIN_MESSAGE);
JOptionPane.showMessageDialog(null, "Hasil Pengurangan "+kurang,"Pengurangan",JOptionPane.PLAIN_MESSAGE);

JOptionPane.showMessageDialog(null,"Hasil Perkalian "+kali,"Perkalian",JOptionPane.PLAIN_MESSAGE);
JOptionPane.showMessageDialog(null, "Hasil Pembagian "+bagi,"Pembagian",JOptionPane.PLAIN_MESSAGE);

}
}
