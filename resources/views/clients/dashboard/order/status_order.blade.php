@if ($order->status == 'Pending' && $order->expired == false)
    <span class="badge rounded-pill alert-warning fw-normal">Menunggu
        Pembayaran</span>
@elseif (($order->status == 'Pending' && $order->expired == true) || $order->status == 'ExpiredPayment')
    <span class="badge rounded-pill alert-warning fw-normal">
        Pembayaran Expired</span>
@elseif ($order->status == 'Paid')
    <span class="badge rounded-pill alert-success fw-normal">Dibayar</span>
@elseif ($order->status == 'ProcessedBySeller')
    <span class="badge rounded-pill alert-danger fw-normal">Diproses oleh Penjual</span>
@elseif ($order->status == 'Shipped')
    <span class="badge rounded-pill alert-danger fw-normal">Dalam Perjalanan</span>
@elseif ($order->status == 'Delivered')
    <span class="badge rounded-pill alert-success fw-normal">Terkirim</span>
@elseif ($order->status == 'RequestedRefund')
    <span class="badge rounded-pill alert-danger fw-normal">Pengajuan Refund</span>
@elseif ($order->status == 'RefundAccepted')
    <span class="badge rounded-pill alert-success fw-normal">Refund Diterima</span>
@elseif ($order->status == 'RefundDone')
    <span class="badge rounded-pill alert-success fw-normal">Refund Berhasil</span>
@elseif ($order->status == 'RefundDeclined')
    <span class="badge rounded-pill alert-warning fw-normal">Refund Ditolak</span>
@elseif ($order->status == 'Completed')
    <span class="badge rounded-pill alert-success fw-normal">Selesai</span>
@elseif ($order->status == 'RequestedReturn')
    <span class="badge rounded-pill alert-warning fw-normal">Pengembalian Ditolak</span>
@elseif ($order->status == 'ReturnAccepted')
    <span class="badge rounded-pill alert-success fw-normal">Pengembalian Diterima</span>
@elseif ($order->status == 'ReturnShipped')
    <span class="badge rounded-pill alert-danger fw-normal">Kembali Dikirim</span>
@elseif ($order->status == 'ReturnDelivered')
    <span class="badge rounded-pill alert-success fw-normal">Pengembalian Dikirim</span>
@elseif ($order->status == 'ReturnCompleted')
    <span class="badge rounded-pill alert-success fw-normal">Pengembalian Selesai</span>
@elseif ($order->status == 'ReturnDeclined')
    <span class="badge rounded-pill alert-danger fw-normal">Refund diminta</span>
@elseif ($order->status == 'Cancelled')
    <span class="badge rounded-pill alert-warning fw-normal">Dibatalkan</span>
@elseif ($order->status == 'Complaint')
    <span class="badge rounded-pill alert-warning fw-normal">Pengajuan Komplain</span>
@elseif ($order->status == 'ComplaintDeclined')
    <span class="badge rounded-pill alert-warning fw-normal">Komplain ditolak</span>
@elseif ($order->status == 'ComplaintAccepted')
    <span class="badge rounded-pill alert-success fw-normal">Komplain disetujui</span>
@elseif ($order->status == 'ComplaintCompleted')
    <span class="badge rounded-pill alert-success fw-normal">Komplain selesai</span>
@else
    <span class="badge rounded-pill alert-warning fw-normal">Menunggu
        Pembayaran</span>
@endif
