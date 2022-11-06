from django.shortcuts import render


def index(request):
    return render(request, 'index.html')


def feeds(request):
    return render(request, 'index-1.html')
