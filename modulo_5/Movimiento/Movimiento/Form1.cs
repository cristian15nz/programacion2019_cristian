﻿using System;
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

            // Reset
            if (keyValue == 82)
            {
                /* Centrado relativo al padre */
                var anchoPadre = label1.Width;
                var anchoHijo = label2.Width;
                var margenX = label1.Location.X;

                var centroX = ((anchoPadre + anchoHijo) / 2) - margenX;

                var alturaPadre = label1.Height;
                var alturaHijo = label2.Height;
                var margenY = label1.Location.Y;

                var centroY = ((alturaPadre + alturaHijo) / 2) - margenY;

                /* Centrado absoluto (al formulario) */
                anchoPadre = this.Width;
                anchoHijo = label2.Width;
              
                alturaPadre = this.Height;
                alturaHijo = label2.Height;

            
                centroX = (anchoPadre + anchoHijo) / 2;
                centroY = (alturaPadre + alturaHijo) / 2;

                MessageBox.Show("Reseting game...");
                label2.Location = new System.Drawing.Point(centroX, centroY);
            }

            // Cambiar color
            if (keyValue == 67)
            {
                MessageBox.Show("Cambiando color.");
            }

            // Izquierda
            if (keyValue == 37 || keyValue == 65)
            {
                if (posicionX <= 15)
                {
                    return;
                }
              
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
                if (posicionX >= 335)
                {
                    return;
                }
                
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

        private void label2_Click(object sender, EventArgs e)
        {

        }
    }
}
