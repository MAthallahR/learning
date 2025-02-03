Public Class Form1
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        If pisang.Checked Then
            list.Items.Add(pisang.Text)
        End If

        If apel.Checked Then
            list.Items.Add(apel.Text)
        End If

        If jeruk.Checked Then
            list.Items.Add(jeruk.Text)
        End If

        If salak.Checked Then
            list.Items.Add(salak.Text)
        End If

        If mangga.Checked Then
            list.Items.Add(mangga.Text)
        End If

        UpdateButtonState()
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        list.Items.Clear()
        UpdateButtonState()
    End Sub

    Private Sub list_SelectedIndexChanged(sender As Object, e As EventArgs) Handles list.SelectedIndexChanged
        If list.SelectedItem IsNot Nothing Then
            Dim selectitem As String = list.SelectedItem.ToString()
            MessageBox.Show(selectitem)
        End If
    End Sub

    Private Sub UpdateButtonState()
        Button2.Enabled = list.Items.Count > 0
        Button1.Enabled = pisang.Checked OrElse apel.Checked OrElse jeruk.Checked OrElse salak.Checked OrElse mangga.Checked
    End Sub

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        UpdateButtonState()
    End Sub

    Private Sub pisang_CheckedChanged(sender As Object, e As EventArgs) Handles pisang.CheckedChanged
        UpdateButtonState()
    End Sub

    Private Sub apel_CheckedChanged(sender As Object, e As EventArgs) Handles apel.CheckedChanged
        UpdateButtonState()
    End Sub

    Private Sub jeruk_CheckedChanged(sender As Object, e As EventArgs) Handles jeruk.CheckedChanged
        UpdateButtonState()
    End Sub

    Private Sub salak_CheckedChanged(sender As Object, e As EventArgs) Handles salak.CheckedChanged
        UpdateButtonState()
    End Sub

    Private Sub mangga_CheckedChanged(sender As Object, e As EventArgs) Handles mangga.CheckedChanged
        UpdateButtonState()
    End Sub
End Class