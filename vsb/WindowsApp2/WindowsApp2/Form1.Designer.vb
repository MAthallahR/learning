<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form1
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.list = New System.Windows.Forms.ListBox()
        Me.pisang = New System.Windows.Forms.CheckBox()
        Me.apel = New System.Windows.Forms.CheckBox()
        Me.jeruk = New System.Windows.Forms.CheckBox()
        Me.salak = New System.Windows.Forms.CheckBox()
        Me.mangga = New System.Windows.Forms.CheckBox()
        Me.Button1 = New System.Windows.Forms.Button()
        Me.Button2 = New System.Windows.Forms.Button()
        Me.SuspendLayout()
        '
        'list
        '
        Me.list.FormattingEnabled = True
        Me.list.Location = New System.Drawing.Point(12, 64)
        Me.list.Name = "list"
        Me.list.Size = New System.Drawing.Size(259, 277)
        Me.list.TabIndex = 0
        '
        'pisang
        '
        Me.pisang.AutoSize = True
        Me.pisang.Location = New System.Drawing.Point(288, 67)
        Me.pisang.Name = "pisang"
        Me.pisang.Size = New System.Drawing.Size(57, 17)
        Me.pisang.TabIndex = 1
        Me.pisang.Text = "pisang"
        Me.pisang.UseVisualStyleBackColor = True
        '
        'apel
        '
        Me.apel.AutoSize = True
        Me.apel.Location = New System.Drawing.Point(288, 90)
        Me.apel.Name = "apel"
        Me.apel.Size = New System.Drawing.Size(46, 17)
        Me.apel.TabIndex = 1
        Me.apel.Text = "apel"
        Me.apel.UseVisualStyleBackColor = True
        '
        'jeruk
        '
        Me.jeruk.AutoSize = True
        Me.jeruk.Location = New System.Drawing.Point(288, 113)
        Me.jeruk.Name = "jeruk"
        Me.jeruk.Size = New System.Drawing.Size(49, 17)
        Me.jeruk.TabIndex = 1
        Me.jeruk.Text = "jeruk"
        Me.jeruk.TextImageRelation = System.Windows.Forms.TextImageRelation.TextBeforeImage
        Me.jeruk.UseVisualStyleBackColor = True
        '
        'salak
        '
        Me.salak.AutoSize = True
        Me.salak.Location = New System.Drawing.Point(288, 136)
        Me.salak.Name = "salak"
        Me.salak.Size = New System.Drawing.Size(51, 17)
        Me.salak.TabIndex = 1
        Me.salak.Text = "salak"
        Me.salak.UseVisualStyleBackColor = True
        '
        'mangga
        '
        Me.mangga.AutoSize = True
        Me.mangga.Location = New System.Drawing.Point(288, 159)
        Me.mangga.Name = "mangga"
        Me.mangga.Size = New System.Drawing.Size(64, 17)
        Me.mangga.TabIndex = 1
        Me.mangga.Text = "mangga"
        Me.mangga.UseVisualStyleBackColor = True
        '
        'Button1
        '
        Me.Button1.Location = New System.Drawing.Point(11, 10)
        Me.Button1.Name = "Button1"
        Me.Button1.Size = New System.Drawing.Size(352, 38)
        Me.Button1.TabIndex = 2
        Me.Button1.Text = "cepatkan bayar"
        Me.Button1.UseVisualStyleBackColor = True
        '
        'Button2
        '
        Me.Button2.Location = New System.Drawing.Point(293, 305)
        Me.Button2.Name = "Button2"
        Me.Button2.Size = New System.Drawing.Size(69, 35)
        Me.Button2.TabIndex = 3
        Me.Button2.Text = "clear"
        Me.Button2.UseVisualStyleBackColor = True
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(375, 450)
        Me.Controls.Add(Me.Button2)
        Me.Controls.Add(Me.Button1)
        Me.Controls.Add(Me.mangga)
        Me.Controls.Add(Me.salak)
        Me.Controls.Add(Me.jeruk)
        Me.Controls.Add(Me.apel)
        Me.Controls.Add(Me.pisang)
        Me.Controls.Add(Me.list)
        Me.Name = "Form1"
        Me.Text = "Form1"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents pisang As CheckBox
    Friend WithEvents apel As CheckBox
    Friend WithEvents jeruk As CheckBox
    Friend WithEvents salak As CheckBox
    Friend WithEvents mangga As CheckBox
    Friend WithEvents Button1 As Button
    Public WithEvents list As ListBox
    Friend WithEvents Button2 As Button
End Class
