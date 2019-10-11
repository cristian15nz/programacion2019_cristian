using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Movimiento
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
            // Obtener el valor de la tecla
            var keyValue = e.KeyValue;

            var posicionX = label2.Location.X;
            var posicionY = label2.Location.Y;

            // Izquierda
            if (keyValue == 37)
            {
                label2.Location = new System.Drawing.Point(posicionX - 1, posicionY);
                label3.Text = label2.Location.ToString();
            }

            // Arriba
            if (keyValue == 38)
            {
                label2.Location = new System.Drawing.Point(posicionX, posicionY - 1);
                label3.Text = label2.Location.ToString();
            }

            // Derecha
            if (keyValue == 39)
            {
                label2.Location = new System.Drawing.Point(posicionX + 1, posicionY);
                label3.Text = label2.Location.ToString();
            }

            // Abajo
            if (keyValue == 40)
            {
                label2.Location = new System.Drawing.Point(posicionX, posicionY + 1);
                label3.Text = label2.Location.ToString();
            }


            // 
        }
    }
}
