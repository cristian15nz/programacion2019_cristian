using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Controles
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            var texto = textBox1.Text;

            if (string.IsNullOrEmpty(texto)) {
                MessageBox.Show("Debe escribir un texto");
                textBox1.Focus();
                return;
            }

            // Agregar
            comboBox1.Items.Add(texto);
        }

        private void button2_Click(object sender, EventArgs e)
        {
            var seleccionado = comboBox1.SelectedItem;

            if (seleccionado == null)
            {
                MessageBox.Show("Debe seleccionar un elemento de la lista");
                return;
            }

            // Eliminar
            comboBox1.Items.Remove(seleccionado);
        }

        private void button3_Click(object sender, EventArgs e)
        {
            // Mostrar el colorDialog
            if (colorDialog1.ShowDialog() == DialogResult.OK)
            {
                tabPage3.BackColor = colorDialog1.Color;
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            var texto = textBox3.Text;

            if (string.IsNullOrEmpty(texto))
            {
                MessageBox.Show("Debe escribir un texto");
                textBox3.Focus();
                return;
            }

            // Agregar
            listBox1.Items.Add(texto);
        }

        private void button5_Click(object sender, EventArgs e)
        {
            var seleccionado = listBox1.SelectedItem;

            if (seleccionado == null)
            {
                MessageBox.Show("Debe seleccionar un elemento de la lista");
                return;
            }

            // Eliminar
            listBox1.Items.Remove(seleccionado);
        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            var chequeado = checkBox1.Checked;

            if (chequeado)
            {
                listBox1.SelectionMode = SelectionMode.MultiSimple;
            }
            else
            {
                listBox1.SelectionMode = SelectionMode.One;
            }
        }

        private void checkBox2_CheckedChanged(object sender, EventArgs e)
        {
            listBox1.Sorted = checkBox2.Checked;

            /*var marcado = checkBox2.Checked;

            if (marcado)
            {
                listBox1.Sorted = true;
            }
            else
            {
                listBox1.Sorted = false;
            }*/
        }
    }
}
