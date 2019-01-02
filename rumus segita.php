
using System;

using System.Collections.Generic;
using System.ComponentModel;

using System.Data;

using System.Drawing;

using System.Linq;
using System.Text;

using System.Threading.Tasks;

using System.Windows.Forms;

namespace luas_segitiga

{
public partial class Form1 : Form

{

public Form1()

{
InitializeComponent();

}



private void bthitung_Click(object sender, EventArgs e)

{
double alas;

double tinggi;

double luas;
alas = Convert.ToDouble(textBox1.Text);

tinggi = Convert.ToDouble(textBox2.Text);

luas = 0.5 * alas * tinggi;
textBox3.Text = luas.ToString();

}

}
}
