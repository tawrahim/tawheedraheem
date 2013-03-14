require 'spec_helper'

describe "homepage/index.html.erb" do
  it "should have right contents and links" do
    visit '/'
    page.should have_content('Tawheed')
    page.should have_link('About')
    page.should have_link('Projects')
    page.should have_link('Blog')
    page.should have_link('Teaching')
  end
end
